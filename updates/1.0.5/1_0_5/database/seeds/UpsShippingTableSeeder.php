<?php

use Illuminate\Database\Seeder;

class UpsShippingTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ups_shipping')->delete();
        
        \DB::table('ups_shipping')->insert(array (
            0 => 
            array (
                'ups_id' => 1,
                'pickup_method' => '07',
                'isDisplayCal' => '',
                'serviceType' => 'US_01,US_02,US_03,US_12,US_13,US_14,US_59',
                'shippingEnvironment' => '0',
                'user_name' => 'nyblueprint',
                'access_key' => 'FCD7C8F94CB5EF46',
                'password' => 'delfia11',
                'person_name' => '',
                'company_name' => '',
                'phone_number' => '',
                'address_line_1' => 'D Ground',
                'address_line_2' => '',
                'country' => 'US',
                'state' => 'NY',
                'post_code' => '10312',
                'city' => 'New York City',
                'no_of_package' => '',
                'parcel_height' => '',
                'parcel_width' => '',
                'title' => '',
            ),
        ));
        
        
    }
}