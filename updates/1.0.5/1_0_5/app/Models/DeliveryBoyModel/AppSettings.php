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

class AppSettings extends Model
{

	public static function pages($request){
		
		$consumer_data 		 				  =  array();
		$consumer_data['consumer_key'] 	 	  =  request()->header('consumer-key');
		$consumer_data['consumer_secret']	  =  request()->header('consumer-secret');
		$consumer_data['consumer_nonce']	  =  request()->header('consumer-nonce');
		$consumer_data['consumer_device_id']  =  request()->header('consumer-device-id');
		$consumer_data['consumer_ip']  	  = request()->header('consumer-ip');
		$consumer_data['consumer_url']  	  =  __FUNCTION__;
		$authController = new AppSettingController();
		$authenticate = $authController->apiAuthenticate($consumer_data);

		if($authenticate==1){	
			
			$language_id            				=   $request->language_id;	

			$data = DB::table('pages')
				->LeftJoin('pages_description', 'pages_description.page_id', '=', 'pages.page_id')
				->where('pages_description.language_id', '=', $language_id)->where('pages.type', '=', 3)->get();
	
			$result = array();
			$index = 0;
			foreach($data as $pages_data){
				array_push($result, $pages_data);
				
				$description =  $pages_data->description;
				$result[$index]->description = stripslashes($description);
				$index++;
				
			}
			
			//check if record exist
			if(count($data)>0){
					$responseData = array('success'=>'1', 'pages_data'=>$result,  'message'=>"Returned all products.");
				}else{
					$responseData = array('success'=>'0', 'pages_data'=>array(),  'message'=>"Empty record.");
				}
						
		}else{
			$responseData = array('success'=>'0', 'data'=>array(),  'message'=>"Unauthenticated call.");
		}
		$categoryResponse = json_encode($responseData);
		print $categoryResponse;
	}

}
