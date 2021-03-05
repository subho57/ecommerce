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

use App\Models\DeliveryBoyModel\DeliveryBoy;

//for Carbon a value 
use Carbon;

class DeliveryBoyController extends Controller
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
	
	public function login(Request $request){
		$response = DeliveryBoy::login($request);
		return($response) ;
	}	
	
	public function changeStatus(Request $request){		
		$response = DeliveryBoy::changeStatus($request);
		return($response) ;
	}

	public function changeOrderStatus(Request $request){		
		$response = Orders::changeOrderStatus($request);
		return($response) ;
    }
    
    public function withdrawrequest(Request $request)
    {
        $response = DeliveryBoy::withdrawrequest($request);
        print $response;
    }

    public function deliveryboyinfo(Request $request)
    {
        $response = DeliveryBoy::deliveryboyinfo($request);
        print $response;
    }

    public function registerdevices(Request $request)
    {
        $userResponse = DeliveryBoy::registerdevices($request);
        print $userResponse;
    }

    
		
}