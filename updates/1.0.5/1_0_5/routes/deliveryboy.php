<?php

use Illuminate\Http\Request;
header('Content-Type: text/html; charset=utf-8');
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "vendor" middleware group. Enjoy building your Vendors API!
|
*/

Route::middleware('auth:deliveryboy')->get('/user', function (Request $request) {
    return $request->user();
});




/*
	|--------------------------------------------------------------------------
	| Vendor Controller Routes
	|--------------------------------------------------------------------------
	|
	| This section contains all Routes of vendor application
	|
	|
*/


Route::group(['namespace' => 'DeliveryBoy'], function () {

	Route::get('/login', 'DeliveryBoyController@login');
	Route::get('/deliveryboyinfo', 'DeliveryBoyController@deliveryboyinfo');
    //registration url
    Route::post('/registerdevices', 'DeliveryBoyController@registerdevices');
	
	Route::get('/changestatus', 'DeliveryBoyController@changeStatus');
	Route::post('/withdrawrequest', 'DeliveryBoyController@withdrawrequest');

	Route::get('/getstatuses', 'OrdersController@getStatuses');
	Route::get('/orders', 'OrdersController@orders');	
	Route::get('/changeorderstatus', 'OrdersController@changeOrderStatus');

	
	Route::get('/pages', 'AppSettingController@pages');
	Route::get('/setting', 'AppSettingController@setting');
	
	
});
