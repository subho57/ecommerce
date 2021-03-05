<?php

namespace App\Http\Controllers\DeliveryBoy;

use App\Models\DeliveryBoyModel\AppSettings;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Lang;
use Mail;



class AppSettingController extends Controller
{

    public function apiAuthenticate($consumer_data)
    {

        $settings = $this->getSetting();

        $callExist = DB::table('api_calls_list')
            ->where([
                ['device_id', '=', $consumer_data['consumer_device_id']],
                ['nonce', '=', $consumer_data['consumer_nonce']],
                ['url', '=', $consumer_data['consumer_url']],
            ])
            ->get();
        $ip = $consumer_data['consumer_ip'];
        $device_id = $consumer_data['consumer_device_id'];

        $block_check = DB::table('block_ips')->where('ip', $ip)->orwhere('device_id', $device_id)->first();
        if ($block_check != null) {
            return '0';
        }

        $http_call_record = DB::table('http_call_record')->where('ip', $ip)->orderBy('ping_time', 'desc')->first();
        if ($http_call_record == null) {
            $last_ping_time = Carbon::now();
            $difference_from_previous = 0;
        } else {
            $last_ping_time = $http_call_record->ping_time;
            $difference_from_previous = $http_call_record->difference_from_previous;

        }
        $date = new Carbon(Carbon::now()->toDateTimeString());
        $difference = $date->floatDiffInSeconds($last_ping_time);

        DB::table('http_call_record')
            ->insert([
                'ip' => $ip,
                'device_id' => $device_id,
                'url' => $consumer_data['consumer_url'],
                'ping_time' => Carbon::now(),
                'difference_from_previous' => $difference,
            ]);

        $time_taken = DB::table('http_call_record')->where('url', $consumer_data['consumer_url'])->where('ip', $ip)->take(10)->sum('difference_from_previous');
        $record_count = DB::table('http_call_record')->where('ip', $ip)->count();

        if(md5($settings['consumer_key']) == $consumer_data['consumer_key'] &&
            md5($settings['consumer_secret']) == $consumer_data['consumer_secret']
             && count($callExist)==0){
            DB::table('api_calls_list')
               ->insert([
                     'device_id'=>$consumer_data['consumer_device_id'],
                     'nonce'=>$consumer_data['consumer_nonce'],
                     'url'=>$consumer_data['consumer_url'],
                     'created_at'=>date('Y-m-d h:i:s')
                 ]);
            return '1';
        }else{
            if($record_count >= 1000 && $time_taken <=60 ){
                    DB::table('http_call_record')->where('url',$consumer_data['consumer_url'])->where('ip',$ip)->delete();

            DB::table('block_ips')
                    ->insert([
                        'ip' => $ip,
                        'device_id' => $device_id,
                    'created_at' => Carbon::now()
                    ]);
                return '0';
                }else{
                    return '0';
                }
        }

    }

    public function pages(Request $request)
    {
        $response = AppSettings::pages($request);
        return ($response);
    }

    public function getlanguages()
    {
        $consumer_data = array();
        $consumer_data['consumer_key'] = request()->header('consumer-key');
        $consumer_data['consumer_secret'] = request()->header('consumer-secret');
        $consumer_data['consumer_nonce'] = request()->header('consumer-nonce');
        $consumer_data['consumer_device_id'] = request()->header('consumer-device-id');
        $consumer_data['consumer_ip'] = request()->header('consumer-ip');
        $consumer_data['consumer_url'] = __FUNCTION__;

        $authenticate = $this->apiAuthenticate($consumer_data);

        if ($authenticate == 1) {
            $languages = DB::table('languages')
                ->LeftJoin('image_categories', function ($join) {
                    $join->on('image_categories.image_id', '=', 'languages.image')
                        ->where(function ($query) {
                            $query->where('image_categories.image_type', '=', 'THUMBNAIL')
                                ->where('image_categories.image_type', '!=', 'THUMBNAIL')
                                ->orWhere('image_categories.image_type', '=', 'ACTUAL');
                        });
                })
                ->select('languages.*', 'image_categories.path as image')->get();
            $responseData = array('success' => '1', 'languages' => $languages, 'message' => "Returned all languages.");
        } else {
            $responseData = array('success' => '0', 'languages' => array(), 'message' => "Unauthenticated call.");
        }

        $categoryResponse = json_encode($responseData);
        print $categoryResponse;
    }

    //get Setting
    public function getSetting()
    {
        $setting = DB::table('settings')->get();
        $result = array();
        foreach ($setting as $settings) {
            $name = $settings->name;
            $value = $settings->value;
            $result[$name] = $value;
        }
        return $result;
    }

    //get Settings
    public function setting()
    {
        $consumer_data = array();
        $consumer_data['consumer_key'] = request()->header('consumer-key');
        $consumer_data['consumer_secret'] = request()->header('consumer-secret');
        $consumer_data['consumer_nonce'] = request()->header('consumer-nonce');
        $consumer_data['consumer_device_id'] = request()->header('consumer-device-id');
        $consumer_data['consumer_ip'] = request()->header('consumer-ip');
        $consumer_data['consumer_url'] = __FUNCTION__;

        $authenticate = $this->apiAuthenticate($consumer_data);

        if ($authenticate == 1) {
            $settings = DB::table('settings')  
                ->where('name', 'is_enable_location')
                ->orwhere('name', 'google_map_api')
                ->orwhere('name', 'currency_symbol') 
                
                ->orwhere('name', 'messaging_senderid') 
                ->orwhere('name', 'storage_bucket') 
                ->orwhere('name', 'projectId') 
                ->orwhere('name', 'database_URL') 
                ->orwhere('name', 'auth_domain') 
                ->orwhere('name', 'default_latitude') 
                ->orwhere('name', 'default_longitude') 
                ->orwhere('name', 'google_map_api')
                ->orwhere('name', 'firebase_apikey')      

                ->orwhere('name', 'onesignal_app_id')    
                ->orwhere('name', 'onesignal_sender_id')  
                ->orwhere('name', 'firebase_appid')  
                ->orwhere('name', 'maptype')       
                ->get();               
                
                $result = array();
                foreach ($settings as $setting) {
                    $name = $setting->name;
                    $value = $setting->value;
                    $result[$name] = $value;
                }

            $responseData = array('success' => '1', 'data' => $result, 'message' => "Returned all site data.");
        } else {
            $responseData = array('success' => '0', 'languages' => array(), 'message' => "Unauthenticated call.");
        }
        $categoryResponse = json_encode($responseData);
        print $categoryResponse;
    }

    //get Settings
    public function contactus(Request $request)
    {

        $name = $request->name;
        $email = $request->email;
        $message = $request->message;
        $consumer_data = array();
        $consumer_data['consumer_key'] = request()->header('consumer-key');
        $consumer_data['consumer_secret'] = request()->header('consumer-secret');
        $consumer_data['consumer_nonce'] = request()->header('consumer-nonce');
        $consumer_data['consumer_device_id'] = request()->header('consumer-device-id');
        $consumer_data['consumer_ip'] = request()->header('consumer-ip');
        $consumer_data['consumer_url'] = __FUNCTION__;

        $authenticate = $this->apiAuthenticate($consumer_data);

        if ($authenticate == 1) {
            $setting = $this->getSetting();
            $data = array('name' => $name, 'email' => $email, 'message' => $message, 'adminEmail' => $setting['contact_us_email']);
            $responseData = array('success' => '1', 'data' => '', 'message' => "Message has been sent successfully!");
            $categoryResponse = json_encode($responseData);
            print $categoryResponse;

            Mail::send('/mail/contactUs', ['data' => $data], function ($m) use ($data) {
                $m->to($data['adminEmail'])->subject(Lang::get("labels.contactUsTitle"))->getSwiftMessage()
                    ->getHeaders()
                    ->addTextHeader('x-mailgun-native-send', 'true');
            });

        } else {
            $responseData = array('success' => '0', 'languages' => array(), 'message' => "Unauthenticated call.");
            $categoryResponse = json_encode($responseData);
            print $categoryResponse;
        }
    }

    
    public function getlocation(Request $request)
    {
        $consumer_data = array();
        $consumer_data['consumer_key'] = request()->header('consumer-key');
        $consumer_data['consumer_secret'] = request()->header('consumer-secret');
        $consumer_data['consumer_nonce'] = request()->header('consumer-nonce');
        $consumer_data['consumer_device_id'] = request()->header('consumer-device-id');
        $consumer_data['consumer_ip'] = request()->header('consumer-ip');
        $consumer_data['consumer_url'] = __FUNCTION__;

        $authenticate = $this->apiAuthenticate($consumer_data);

        if ($authenticate == 1) {
            $address = urlencode($request->address);
            $settings = $this->getSetting();

            $data = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?key=' . $settings['google_map_api'] . '&address=' . $address);
            $data = json_decode($data);
            $responseData = array('success' => '1', 'data' => $data, 'message' => "Current location is returned successfully.");
        } else {
            $responseData = array('success' => '0', 'languages' => array(), 'message' => "Unauthenticated call.");

        }

        $response = json_encode($responseData);
        print $response;
    }

}
