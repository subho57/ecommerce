<?php
namespace App\Http\Controllers\DeliveryBoy;

//validator is builtin class in laravel
use Validator;

use Mail;
use DB;
//for password encryption or hash protected
use Hash;
use DateTime;

//for authenitcate login data
use Auth;
use Illuminate\Foundation\Auth\ThrottlesLogins;

//for requesting a value 
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use App\Models\DeliveryBoyModel\Orders;

//for Carbon a value 
use Carbon;

class OrdersController extends Controller
{
	
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   /* public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
		 	
	public function getStatuses(Request $request){		
		$response = Orders::getStatuses($request);
		return($response) ;
	}

	public function orders(Request $request){
		$response = Orders::orders($request);
		return($response) ;
	}

	public function changeOrderStatus(Request $request){		
		$response = Orders::changeOrderStatus($request);
		return($response) ;
	}

	
	
	//changeStatus
	public function qrCode(Request $request){
		
		$is_available 			=  $request->is_available;
		$delivery_boy_pincode 	=  $request->delivery_boy_pincode;
		$consumer_data 		 				  =  array();
		$consumer_data['consumer_key'] 	 	  =  request()->header('consumer-key');
		$consumer_data['consumer_secret']	  =  request()->header('consumer-secret');
		$consumer_data['consumer_nonce']	  =  request()->header('consumer-nonce');	
		$consumer_data['consumer_device_id']  =  request()->header('consumer-device-id');	
		$consumer_data['consumer_url']  	  =  __FUNCTION__;
		$authController = new AppSettingController();
		$authenticate = $authController->apiAuthenticate($consumer_data);
		$authenticate=1;
		if($authenticate==1){		
			
			$data = DB::table('qr_codes')->where('status', 1)->get();
			if(count($data)>0){			
				$responseData = array('success'=>'1', 'data'=>$data,  'message'=>"QR Codes are returned successfully!");
			}else{
				$responseData = array('success'=>'0', 'data'=>array(),  'message'=>"There is no qr code.");
			}
			
		}else{
			$responseData = array('success'=>'0', 'data'=>array(),  'message'=>"Unauthenticated call.");
		}
		$categoryResponse = json_encode($responseData);
		print $categoryResponse;
	}
	
	//deliverypages
	public function deliverypages(Request $request){
		
		$language_id            				=   $request->language_id;	
		$consumer_data 		 				  =  array();
		$consumer_data['consumer_key'] 	 	  =  request()->header('consumer-key');
		$consumer_data['consumer_secret']	  =  request()->header('consumer-secret');
		$consumer_data['consumer_nonce']	  =  request()->header('consumer-nonce');	
		$consumer_data['consumer_device_id']  =  request()->header('consumer-device-id');	
		$consumer_data['consumer_url']  	  =  __FUNCTION__;
		$authController = new AppSettingController();
		$authenticate = $authController->apiAuthenticate($consumer_data);
		$authenticate=1;
		if($authenticate==1){
			
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
			$responseData = array('success'=>'0', 'pages_data'=>array(),  'message'=>"Unauthenticated call.");
		}			
		$categoryResponse = json_encode($responseData);
		print $categoryResponse;
	}

	
	
	
	
}