<?php

namespace App\Models\DeliveryBoyModel;

use App\Http\Controllers\App\AppSettingController;
use DB;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    public static function getStatuses($request)
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
            $language_id = $request->language_id;
            $data = DB::table('orders_status')
                ->leftjoin(
                    'orders_status_description',
                    'orders_status_description.orders_status_id',
                    '=',
                    'orders_status.orders_status_id'
                )
                ->where('orders_status_description.language_id', $language_id)
                ->where('orders_status.role_id', 2)
                ->get();

            $responseData = array('success' => '1', 'data' => $data, 'message' => "Avalible statuses has been returned successfully!");
        } else {
            $responseData = array('success' => '0', 'data' => array(), 'message' => "Unauthenticated call.");
        }
        $categoryResponse = json_encode($responseData);
        print $categoryResponse;
    }

    public static function orders($request)
    {
        $consumer_data = array();
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
            $password = $request->password;
            $language_id = $request->language_id;
            $delivery_boy = DB::table('users')->where('password', $password)->first();
            if ($delivery_boy) {
                $order = DB::table('orders')->orderBy('customers_id', 'desc')
                    ->leftJoin('orders_to_delivery_boy', 'orders_to_delivery_boy.orders_id', '=', 'orders.orders_id')
                    ->where([
                        ['deliveryboy_id', '=', $delivery_boy->id],
                        ['is_current', '=', 1]
                    ])->get();
                if (count($order) > 0) {
                    //foreach
                    $index = '0';
                    foreach ($order as $data) {
                        if (!empty($data->coupon_code)) {
                            $coupon_code = $data->coupon_code;
                            $order[$index]->coupons = json_decode($coupon_code);
                        } else {
                            $coupon_code = array();
                            $order[$index]->coupons = $coupon_code;
                        }

                        unset($data->coupon_code);

                        $orders_id = $data->orders_id;

                        $orders_status_history = DB::table('orders_status_history')
                            ->LeftJoin('orders_status', 'orders_status.orders_status_id', '=', 'orders_status_history.orders_status_id')
                            ->leftjoin(
                                'orders_status_description',
                                'orders_status_description.orders_status_id',
                                '=',
                                'orders_status.orders_status_id'
                            )
                        //->where('orders_status_description.orders_status_id','!=', 8)
                        //->where('orders_status_description.orders_status_id','!=', 11)

                            ->select('orders_status_description.orders_status_name', 'orders_status.orders_status_id', 'orders_status_history.comments')
                            ->where('orders_id', '=', $orders_id)
                            ->where('orders_status.role_id', '=', 2)
                            ->where('orders_status_description.language_id', $language_id)
                            ->orderby('orders_status_history.orders_status_history_id', 'ASC')->get();

                        $order[$index]->orders_status_id = $orders_status_history[0]->orders_status_id;
                        $order[$index]->orders_status = $orders_status_history[0]->orders_status_name;
                        $order[$index]->customer_comments = $orders_status_history[0]->comments;

                        $total_comments = count($orders_status_history);
                        $i = 1;

                        foreach ($orders_status_history as $orders_status_history_data) {
                            if ($total_comments == $i && $i != 1) {
                                $order[$index]->orders_status_id = $orders_status_history_data->orders_status_id;
                                $order[$index]->orders_status = $orders_status_history_data->orders_status_name;
                                $order[$index]->admin_comments = $orders_status_history_data->comments;
                            } else {
                                $order[$index]->admin_comments = '';
                            }

                            $i++;
                        }

                        $orders_products = DB::table('orders_products')
                            ->join('products', 'products.products_id', '=', 'orders_products.products_id')
                            ->leftjoin('products_to_categories', 'products_to_categories.products_id', '=', 'products.products_id')
                            ->leftjoin('categories', 'categories.categories_id', 'products_to_categories.categories_id')
                            ->leftjoin('categories_description', 'categories_description.categories_id', 'products_to_categories.categories_id')
                            ->leftjoin('manufacturers', 'manufacturers.manufacturers_id', '=', 'products.manufacturers_id')
                            ->LeftJoin('image_categories', function ($join) {
                                $join->on('image_categories.image_id', '=', 'products.products_image')
                                    ->where(function ($query) {
                                        $query->where('image_categories.image_type', '=', 'THUMBNAIL')
                                            ->where('image_categories.image_type', '!=', 'THUMBNAIL')
                                            ->orWhere('image_categories.image_type', '=', 'ACTUAL');
                                    });
                            })
                            ->select(
                                'orders_products.*',
                                'image_categories.path as image',
                                'manufacturers.manufacturer_name',
                                'categories_description.categories_name'
                            )
                            ->where('orders_products.orders_id', '=', $orders_id)
                            ->where('categories_description.language_id', '=', $language_id)
                            ->where('categories.parent_id', '=', 0)

                            ->orderby('manufacturers.manufacturer_name', 'ASC')
                            ->orderby('categories_description.categories_name', 'ASC')
                            ->groupby('orders_products.products_id')
                            ->get();

                        $current_date = time();
                        $dayname = date('l', $current_date);
                        $day = strtolower('is_' . $dayname);
                        if (count($orders_products) > 0) {
                            
                            $k = 0;
                            $product = array();
                            foreach ($orders_products as $orders_products_data) {                                
                                
                                $product_attribute = DB::table('orders_products_attributes')
                                    ->where([
                                        ['orders_products_id', '=', $orders_products_data->orders_products_id],
                                        ['orders_id', '=', $orders_products_data->orders_id],
                                    ])
                                    ->get();

                                $orders_products_data->attributes = $product_attribute;
                                $product[$k] = $orders_products_data;
                                $k++;
                            }
                            
                            $data->data = $product;
                            $orders_data[] = $data;
                            $index++;
                        }
                    }
                    $responseData = array('success' => '1', 'data' => $orders_data, 'message' => "Returned all orders.");
                } else {
                    $orders_data = array();
                    $responseData = array('success' => '0', 'data' => $orders_data, 'message' => "Order is not placed yet.");
                }
            } else {
                $responseData = array('success' => '0', 'data' => array(), 'message' => "Invalid Pin code.");
            }
        } else {
            $responseData = array('success' => '0', 'data' => array(), 'message' => "Unauthenticated call.");
        }
        $orderResponse = json_encode($responseData);
        print $orderResponse;
    }
    public static function changeOrderStatus($request)
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
            $orders_id = $request->orders_id;
            $orders_status_id = $request->orders_status_id;

            if (!empty($request->comments)) {
                $comments = $request->comments;
            } else {
                $comments = '';
            }

            $password = $request->password;
            $user_type = '2';
            $date_added = date('Y-m-d h:i:s');

            $exist = DB::table('users')
                ->leftjoin('orders_to_delivery_boy', 'orders_to_delivery_boy.deliveryboy_id', '=', 'users.id')
                ->where([
                    ['users.password', $password],
                    ['orders_to_delivery_boy.orders_id', $orders_id],
                    ['users.status', 1]])
                ->first();

            if ($exist) {
                DB::table('orders_to_delivery_boy')->where(['orders_to_deliveryboy_id' => $exist->deliveryboy_id], ['orders_id' => $orders_id])->update(['is_current' => 0]);

                DB::table('orders_status_history')->insertGetId(
                    ['orders_id' => $orders_id,
                        'orders_status_id' => $orders_status_id,
                        'date_added' => $date_added,
                        'customer_notified' => '1',
                        'comments' => '',
                        'role_id' => 4,
                    ]
                );

                DB::table('orders_to_delivery_boy_history')->insertGetId(
                    ['orders_id' => $orders_id,
                        'orders_to_deliveryboy_id' => $exist->deliveryboy_id,
                        'created_at' => $date_added,
                        'commented_person' => '2',
                        'commented_person_id' => $exist->orders_to_deliveryboy_id,
                        'comments' => addslashes($comments),
                    ]
                );

                if ($orders_status_id == 6) {
                    $orders = DB::table('orders')
                        ->where([
                            ['orders_id', $orders_id],
                        ])->first();

                        DB::table('orders')
                        ->where('orders_id', $orders_id)->update(['orders_date_finished' => date('Y-m-d h:i:s')]);
                    if($orders->payment_method =='Cash on Delivery'){
                        DB::table('floating_cash')->insertGetId(
                            ['orders_id' => $orders_id,
                                'deliveryboy_id' => $exist->deliveryboy_id,
                                'created_at' => $date_added,
                                'updated_at' => '',
                                'amount' => $orders->order_price,
                                'status' => 0,
                                'admin_id' => 0,
                            ]
                        );
                    }
                   
                }

                $responseData = array('success' => '1', 'data' => '', 'message' => "Order status has been changed successfully!");
            } else {
                $responseData = array('success' => '0', 'data' => array(), 'message' => "Orders does not exist.");
            }
        } else {
            $responseData = array('success' => '0', 'data' => array(), 'message' => "Unauthenticated call.");
        }
        $categoryResponse = json_encode($responseData);
        print $categoryResponse;
    }
}
