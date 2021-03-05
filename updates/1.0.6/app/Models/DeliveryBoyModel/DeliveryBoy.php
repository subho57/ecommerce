<?php

namespace App\Models\DeliveryBoyModel;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Admin\AdminSiteSettingController;
use App\Http\Controllers\Admin\AdminCategoriesController;
use App\Http\Controllers\Admin\AdminProductsController;
use App\Http\Controllers\App\AppSettingController;
use App\Http\Controllers\App\AlertController;
use DB;
use Lang;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Validator;
use Mail;
use DateTime;
use Auth;
use Carbon;
use Hash;
use File;

class DeliveryBoy extends Model
{
    public static function login($request)
    {
        $consumer_data 		 				  =  array();
        $consumer_data['consumer_key'] 	 	  =  request()->header('consumer-key');
        $consumer_data['consumer_secret']	  =  request()->header('consumer-secret');
        $consumer_data['consumer_nonce']	  =  request()->header('consumer-nonce');
        $consumer_data['consumer_device_id']  =  request()->header('consumer-device-id');
        $consumer_data['consumer_ip']  	  = request()->header('consumer-ip');
        $consumer_data['consumer_url']  	  =  __FUNCTION__;
        $authController = new AppSettingController();
        $authenticate = $authController->apiAuthenticate($consumer_data);

        if ($authenticate==1) {
            $date_added		 =	date('Y-m-d h:i:s');
            
            $password 		 = $request->password;
            $device_type 	 = strtolower($request->device_type);
            $ram 		 	 = $request->ram;
            $processor 		 = $request->processor;
            $device_os 		 = $request->device_os;
            $location 		 = $request->device_type;
            $latittude 		 = $request->latittude;
            $longitude 		 = $request->longitude;
            $device_model 	 = $request->device_model;
            $manufacturer 	 = $request->manufacturer;
            $browser_info 	 = 'APP';
            $is_notify 		 = $request->is_notify;
            
            
            $haveUser = DB::table('users')->where('password', $password)->get();
            
            if (count($haveUser)>0) {
                $existUser = DB::table('users')
                    ->leftjoin('deliveryboy_info', 'deliveryboy_info.users_id', '=', 'users.id')
                    ->LeftJoin('bank_detail', 'bank_detail.users_id', '=', 'users.id')
                    ->where('password', $password)->where('status', '1')
                    ->where('bank_detail.is_current', 1)->get();
            
                if (count($existUser)>0) {
                                       
                    DB::table('devices')->insertGetId(
                        [	 'device_id'  	=> $request->device_id,
                             'status' 	  	=>'1',
                             'device_type'	=> $device_type,
                             'is_notify' 	=> '1',
                             'created_at'	=> $date_added,
                             'ram'  		=>  $ram,
                             'processor'  	=>  $processor,
                             'device_os'  	=>  $device_os,
                             'location'  	=>  $location,
                             'latittude'  	=>  $latittude,
                             'longitude'  	=>  $longitude,
                             'device_model'  	=>  $device_model,
                             'manufacturer'  	=>  $manufacturer,
                             'browser_info'  	=>  $browser_info,
                        ]
                    );

                    $users_id = $existUser[0]->id;

                    $in = DB::table('users_balance')->where('users_id', $users_id)->where('transaction_type', 'in')->where('status','Completed')->sum('amount');
                    $out = DB::table('users_balance')->where('users_id', $users_id)->where('transaction_type', 'out')->where('status','Withdraw')->sum('amount');
                    $balance = 0;
                    if($in > 0){
                        $balance = abs($in - $out);
                    }
                    $existUser[0]->balance = $balance;                     

                    $floating_cash = DB::table('floating_cash')->where([
                        ['deliveryboy_id', $existUser[0]->id],
                        ['status', 0]
                    ])->sum('amount');   

                    $existUser[0]->flosting_cash = $floating_cash;

                    $responseData = array('success'=>'1', 'data'=>$existUser, 'message'=>'Data has been returned successfully!');
                     
                } else {
                    $responseData = array('success'=>'0', 'data'=>array(), 'message'=>"Your account has been deactivated.");
                }
            } else {
                $responseData = array('success'=>'0', 'data'=>array(), 'message'=>"Invalid Pin code.");
            }
        } else {
            $responseData = array('success'=>'0', 'data'=>array(),  'message'=>"Unauthenticated call.");
        }
        $userResponse = json_encode($responseData);

        return $userResponse;
    }

    public static function deliveryboyinfo($request)
    {
        $consumer_data 		 				  =  array();
        $consumer_data['consumer_key'] 	 	  =  request()->header('consumer-key');
        $consumer_data['consumer_secret']	  =  request()->header('consumer-secret');
        $consumer_data['consumer_nonce']	  =  request()->header('consumer-nonce');
        $consumer_data['consumer_device_id']  =  request()->header('consumer-device-id');
        $consumer_data['consumer_ip']  	  = request()->header('consumer-ip');
        $consumer_data['consumer_url']  	  =  __FUNCTION__;
        $authController = new AppSettingController();
        $authenticate = $authController->apiAuthenticate($consumer_data);

        if ($authenticate==1) {
            $date_added		 =	date('Y-m-d h:i:s');            
            $password 		 = $request->password;          
            
            $existUser = DB::table('users')
                ->leftjoin('deliveryboy_info', 'deliveryboy_info.users_id', '=', 'users.id')
                ->LeftJoin('bank_detail', 'bank_detail.users_id', '=', 'users.id')

                ->LeftJoin('image_categories as driving_license_images', function ($join) {
                    $join->on('driving_license_images.image_id', '=', 'deliveryboy_info.driving_license_image')
                        ->where(function ($query) {
                            $query->where('driving_license_images.image_type', '=', 'THUMBNAIL')
                                ->where('driving_license_images.image_type', '!=', 'THUMBNAIL')
                                ->orWhere('driving_license_images.image_type', '=', 'ACTUAL');
                        });
                })
                ->LeftJoin('image_categories as vehicle_rc_book_images', function ($join) {
                    $join->on('vehicle_rc_book_images.image_id', '=', 'deliveryboy_info.vehicle_rc_book_image')
                        ->where(function ($query) {
                            $query->where('vehicle_rc_book_images.image_type', '=', 'THUMBNAIL')
                                ->where('vehicle_rc_book_images.image_type', '!=', 'THUMBNAIL')
                                ->orWhere('vehicle_rc_book_images.image_type', '=', 'ACTUAL');
                        });
                })

               
                ->select('users.*', 'deliveryboy_info.*', 'deliveryboy_info.users_id as deliveryboy_id', 'bank_detail.*', 'driving_license_images.path as driving_license_image',
                'vehicle_rc_book_images.path as vehicle_rc_book_image')

                ->where('password', $password)->where('status', '1')
                ->where('bank_detail.is_current', 1)->get();
        
            if (count($existUser)>0) {                    
                $floating_cash = DB::table('floating_cash')->where([
                        ['deliveryboy_id', $existUser[0]->id],
                        ['status', 0]
                    ])->sum('amount');   

                $existUser[0]->flosting_cash = $floating_cash;
                

                $users_id = $existUser[0]->id;

                $in = DB::table('users_balance')->where('users_id', $users_id)->where('transaction_type', 'in')->where('status','Completed')->sum('amount');
                $out = DB::table('users_balance')->where('users_id', $users_id)->where('transaction_type', 'out')->where('status','Withdraw')->sum('amount');
                $balance = 0;
                if($in > 0){
                    $balance = abs($in - $out);
                }
                $existUser[0]->balance = $balance;
                $responseData = array('success'=>'1', 'data'=>$existUser, 'message'=>'Data has been returned successfully!');
                     
                
            } else {
                $responseData = array('success'=>'0', 'data'=>array(), 'message'=>"Invalid Pin code.");
            }
        } else {
            $responseData = array('success'=>'0', 'data'=>array(),  'message'=>"Unauthenticated call.");
        }
        $userResponse = json_encode($responseData);

        return $userResponse;
    }

    public static function changeStatus($request)
    {
        $consumer_data 		 				  =  array();
        $consumer_data['consumer_key'] 	 	  =  request()->header('consumer-key');
        $consumer_data['consumer_secret']	  =  request()->header('consumer-secret');
        $consumer_data['consumer_nonce']	  =  request()->header('consumer-nonce');
        $consumer_data['consumer_device_id']  =  request()->header('consumer-device-id');
        $consumer_data['consumer_ip']  	  = request()->header('consumer-ip');
        $consumer_data['consumer_url']  	  =  __FUNCTION__;
        $authController = new AppSettingController();
        $authenticate = $authController->apiAuthenticate($consumer_data);

        if ($authenticate==1) {
            $availability_status 	=  $request->availability_status;
            $password 	          =  $request->password;
            $existUser = DB::table('users')
                    ->leftjoin('deliveryboy_info', 'deliveryboy_info.users_id', '=', 'users.id')
                    ->where('password', $password)->where('status', '1')->get();
            DB::table('users')
            ->leftjoin('deliveryboy_info', 'deliveryboy_info.users_id', '=', 'users.id')
            ->where('password', $password)->update([
                'availability_status'   =>   $availability_status,
               ]);
          
            $responseData = array('success'=>'1', 'data'=>'',  'message'=>"Status has been changed successfully!");
        } else {
            $responseData = array('success'=>'0', 'data'=>array(),  'message'=>"Unauthenticated call.");
        }
        $categoryResponse = json_encode($responseData);
        print $categoryResponse;
    }

    public static function withdrawrequest($request)
    {
        $consumer_data 		 				  =  array();
        $consumer_data['consumer_key'] 	 	  =  request()->header('consumer-key');
        $consumer_data['consumer_secret']	  =  request()->header('consumer-secret');
        $consumer_data['consumer_nonce']	  =  request()->header('consumer-nonce');
        $consumer_data['consumer_device_id']  =  request()->header('consumer-device-id');
        $consumer_data['consumer_ip']  =  request()->header('consumer-ip');
        $consumer_data['consumer_url']  	  =  __FUNCTION__;
        $authController = new AppSettingController();
        $authenticate = $authController->apiAuthenticate($consumer_data);

        if ($authenticate==1) {
            if (!empty($request->password)) {
                $password = $request->password;
                $existUser = DB::table('users')
                    ->leftjoin('deliveryboy_info', 'deliveryboy_info.users_id', '=', 'users.id')
                    ->where('password', $password)->where('status', '1')->first();
                
                if ($existUser) {
					$user_id = $existUser->id;
                    $amount = $request->amount;
                    $note   = $request->note;
                    $already = DB::table('payment_withdraw')->where('user_id', $user_id)->where('status', '0')->get();
                    if (count($already)) {
                        $responseData = array('success'=>'0', 'data'=>$already,  'message'=>"You have already requested for withdraw.");
                    } else {
                        $payment_withdraw_id = DB::table('payment_withdraw')
                                    ->insertGetid([
                                        'user_id'  => $user_id,
                                        'amount'    => $amount,
                                        'created_at' => date('Y-m-d H:i:s'),
                                        'method'    => 'Bank',
                                        'note'      => $note,
                                        'status'    => 0,
                                    ]);
                        $already = DB::table('payment_withdraw')->where('payment_withdraw_id', $payment_withdraw_id)->get();
                        $responseData = array('success'=>'1', 'data'=>$already,  'message'=>"Data has been returend successfully!");
                    }
                } else {
                    $responseData = array('success'=>'0', 'data'=>array(),  'message'=>"This Delivery boy is not  exist.");
                }
            } else {
                $responseData = array('success'=>'0', 'data'=>array(),  'message'=>"Delivery boy info is missing.");
            }
        } else {
            $responseData = array('success'=>'0', 'data'=>array(),  'message'=>"Unauthenticated call.");
        }

        $categoryResponse = json_encode($responseData);

        return $categoryResponse;
    }

    public static function registerdevices($request)
    {
        $consumer_data = array();
        $consumer_data['consumer_key'] = request()->header('consumer-key');
        $consumer_data['consumer_secret'] = request()->header('consumer-secret');
        $consumer_data['consumer_nonce'] = request()->header('consumer-nonce');
        $consumer_data['consumer_device_id'] = request()->header('consumer-device-id');
        $consumer_data['consumer_ip'] = request()->header('consumer-ip');
        $consumer_data['consumer_url'] = __FUNCTION__;
        $authController = new AppSettingController();
        $authenticate = $authController->apiAuthenticate($consumer_data);

        if ($authenticate == 1) {
            $myVar = new AppSettingController();
            $setting = $myVar->getSetting();

            $device_type = $request->device_type;

            if ($device_type == 'iOS') { /* iphone */
                $type = 1;
            } elseif ($device_type == 'Android') { /* android */
                $type = 2;
            } elseif ($device_type == 'Desktop') { /* other */
                $type = 3;
            }

            if (!empty($request->password)) {
                $password 	          =  $request->password;
            
                $existUser = DB::table('users')
                    ->leftjoin('deliveryboy_info', 'deliveryboy_info.users_id', '=', 'users.id')
                    ->where('password', $password)->where('status', '1')->first();

                $device_data = array(
                    'device_id' => $request->device_id,
                    'device_type' => $type,
                    'ram' => $request->ram,
                    'status' => '1',
                    'processor' => $request->processor,
                    'device_os' => $request->device_os,
                    'location' => $request->location,
                    'device_model' => $request->device_model,
                    'user_id' => $existUser->id,
                    'manufacturer' => $request->manufacturer,
                    'operating_system' => $request->operating_system,
                );
            } else {
                $device_data = array(
                    'device_id' => $request->device_id,
                    'device_type' => $type,
                    'operating_system' => $request->operating_system,
                    'status' => '1',
                    'ram' => $request->ram,
                    'processor' => $request->processor,
                    'device_os' => $request->device_os,
                    'location' => $request->location,
                    'device_model' => $request->device_model,
                    'manufacturer' => $request->manufacturer,
                );
            }

            $device = DB::table('devices')->where('device_id', '=', $request->device_id)->first();

            if ($device) {
                $dataexist = DB::table('devices')->where('device_id', '=', $request->device_id)->where('user_id', '==', '0')->first();

                DB::table('devices')
                    ->where('device_id', $request->device_id)
                    ->update($device_data);

                if ($dataexist) {
                    $userData = DB::table('users')->where('id', '=', $request->vendors_id)->get();
                    //$myVar = new AlertController();
                   // $alertSetting = $myVar->createUserAlert($userData);
                }
            } else {
                $device = DB::table('devices')->insertGetId($device_data);
            }

            $responseData = array('success' => '1', 'data' => array(), 'message' => "Device is registered.");
        } else {
            $responseData = array('success' => '0', 'data' => array(), 'message' => "Unauthenticated call.");
        }
        $userResponse = json_encode($responseData);

        return $userResponse;
    }
}
