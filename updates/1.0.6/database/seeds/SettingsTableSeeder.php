<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('settings')->delete();

        \DB::table('settings')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'facebook_app_id',
                'value' => 'FB_CLIENT_ID',
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => '2019-11-01 06:58:53',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'facebook_secret_id',
                'value' => 'FB_SECRET_KEY',
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => '2019-11-01 06:58:53',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'facebook_login',
                'value' => '0',
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => '2019-11-01 06:58:53',
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'contact_us_email',
                'value' => '',
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => '2019-10-21 07:36:53',
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'address',
                'value' => 'address',
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => '2019-10-21 07:36:53',
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'city',
                'value' => 'City',
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => '2019-10-21 07:36:53',
            ),
            6 =>
            array (
                'id' => 7,
                'name' => 'state',
                'value' => 'State',
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => '2019-10-21 07:36:53',
            ),
            7 =>
            array (
                'id' => 8,
                'name' => 'zip',
                'value' => 'Zip',
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => '2019-10-21 07:36:53',
            ),
            8 =>
            array (
                'id' => 9,
                'name' => 'country',
                'value' => 'Country',
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => '2019-10-21 07:36:53',
            ),
            9 =>
            array (
                'id' => 10,
                'name' => 'latitude',
                'value' => 'Latitude',
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => '2019-10-21 07:36:53',
            ),
            10 =>
            array (
                'id' => 11,
                'name' => 'longitude',
                'value' => 'Longitude',
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => '2019-10-21 07:36:53',
            ),
            11 =>
            array (
                'id' => 12,
                'name' => 'phone_no',
                'value' => '+92 312 1234567',
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => '2019-10-21 07:36:53',
            ),
            12 =>
            array (
                'id' => 13,
                'name' => 'fcm_android',
                'value' => '',
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => '2019-02-05 11:42:15',
            ),
            13 =>
            array (
                'id' => 14,
                'name' => 'fcm_ios',
                'value' => NULL,
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => NULL,
            ),
            14 =>
            array (
                'id' => 15,
                'name' => 'fcm_desktop',
                'value' => NULL,
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => NULL,
            ),
            15 =>
            array (
                'id' => 16,
                'name' => 'website_logo',
                'value' => 'images/admin_logo/logo-laravel-blue-v1.png',
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => '2019-10-11 11:57:29',
            ),
            16 =>
            array (
                'id' => 17,
                'name' => 'fcm_android_sender_id',
                'value' => NULL,
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => NULL,
            ),
            17 =>
            array (
                'id' => 18,
                'name' => 'fcm_ios_sender_id',
                'value' => '',
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => '2019-02-05 11:42:15',
            ),
            18 =>
            array (
                'id' => 19,
                'name' => 'app_name',
                'value' => '',
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => '2019-10-21 07:36:53',
            ),
            19 =>
            array (
                'id' => 20,
                'name' => 'currency_symbol',
                'value' => '$',
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => '2018-11-19 07:26:01',
            ),
            20 =>
            array (
                'id' => 21,
                'name' => 'new_product_duration',
                'value' => '20',
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => '2019-10-21 07:36:53',
            ),
            21 =>
            array (
                'id' => 22,
                'name' => 'notification_title',
                'value' => 'Ionic Ecommerce',
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => '2019-05-15 10:58:30',
            ),
            22 =>
            array (
                'id' => 23,
                'name' => 'notification_text',
                'value' => 'A bundle of products waiting for you!',
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => NULL,
            ),
            23 =>
            array (
                'id' => 24,
                'name' => 'lazzy_loading_effect',
                'value' => 'Detail',
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => '2019-05-15 10:58:30',
            ),
            24 =>
            array (
                'id' => 25,
                'name' => 'footer_button',
                'value' => '1',
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => '2019-05-15 10:58:30',
            ),
            25 =>
            array (
                'id' => 26,
                'name' => 'cart_button',
                'value' => '1',
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => '2019-05-15 10:58:30',
            ),
            26 =>
            array (
                'id' => 27,
                'name' => 'featured_category',
                'value' => NULL,
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => NULL,
            ),
            27 =>
            array (
                'id' => 28,
                'name' => 'notification_duration',
                'value' => 'year',
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => '2019-05-15 10:58:30',
            ),
            28 =>
            array (
                'id' => 29,
                'name' => 'home_style',
                'value' => '1',
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => '2019-05-15 10:58:30',
            ),
            29 =>
            array (
                'id' => 30,
                'name' => 'wish_list_page',
                'value' => '1',
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => '2019-05-15 10:58:30',
            ),
            30 =>
            array (
                'id' => 31,
                'name' => 'edit_profile_page',
                'value' => '1',
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => '2019-05-15 10:58:30',
            ),
            31 =>
            array (
                'id' => 32,
                'name' => 'shipping_address_page',
                'value' => '1',
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => '2019-05-15 10:58:30',
            ),
            32 =>
            array (
                'id' => 33,
                'name' => 'my_orders_page',
                'value' => '1',
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => '2019-05-15 10:58:30',
            ),
            33 =>
            array (
                'id' => 34,
                'name' => 'contact_us_page',
                'value' => '1',
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => '2019-05-15 10:58:30',
            ),
            34 =>
            array (
                'id' => 35,
                'name' => 'about_us_page',
                'value' => '1',
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => '2019-05-15 10:58:30',
            ),
            35 =>
            array (
                'id' => 36,
                'name' => 'news_page',
                'value' => '1',
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => '2019-05-15 10:58:30',
            ),
            36 =>
            array (
                'id' => 37,
                'name' => 'intro_page',
                'value' => '1',
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => '2019-05-15 10:58:30',
            ),
            37 =>
            array (
                'id' => 38,
                'name' => 'setting_page',
                'value' => '1',
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => NULL,
            ),
            38 =>
            array (
                'id' => 39,
                'name' => 'share_app',
                'value' => '1',
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => '2019-05-15 10:58:30',
            ),
            39 =>
            array (
                'id' => 40,
                'name' => 'rate_app',
                'value' => '1',
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => '2019-05-15 10:58:30',
            ),
            40 =>
            array (
                'id' => 41,
                'name' => 'site_url',
                'value' => 'URL',
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => '2018-11-19 07:26:01',
            ),
            41 =>
            array (
                'id' => 42,
                'name' => 'admob',
                'value' => '0',
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => '2019-05-15 10:58:05',
            ),
            42 =>
            array (
                'id' => 43,
                'name' => 'admob_id',
                'value' => 'ID',
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => '2019-05-15 10:58:05',
            ),
            43 =>
            array (
                'id' => 44,
                'name' => 'ad_unit_id_banner',
                'value' => 'Unit ID',
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => '2019-05-15 10:58:05',
            ),
            44 =>
            array (
                'id' => 45,
                'name' => 'ad_unit_id_interstitial',
                'value' => 'Indestrial',
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => '2019-05-15 10:58:05',
            ),
            45 =>
            array (
                'id' => 46,
                'name' => 'category_style',
                'value' => '4',
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => '2019-05-15 10:58:30',
            ),
            46 =>
            array (
                'id' => 47,
                'name' => 'package_name',
                'value' => 'package name',
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => '2019-05-15 10:58:30',
            ),
            47 =>
            array (
                'id' => 48,
                'name' => 'google_analytic_id',
                'value' => 'test',
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => '2019-05-15 10:58:30',
            ),
            48 =>
            array (
                'id' => 49,
                'name' => 'themes',
                'value' => 'themeone',
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => NULL,
            ),
            49 =>
            array (
                'id' => 50,
                'name' => 'company_name',
                'value' => '#',
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => '2019-10-07 09:52:24',
            ),
            50 =>
            array (
                'id' => 51,
                'name' => 'facebook_url',
                'value' => '#',
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => '2019-10-11 11:57:29',
            ),
            51 =>
            array (
                'id' => 52,
                'name' => 'google_url',
                'value' => '#',
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => '2019-10-11 11:57:29',
            ),
            52 =>
            array (
                'id' => 53,
                'name' => 'twitter_url',
                'value' => '#',
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => '2019-10-11 11:57:29',
            ),
            53 =>
            array (
                'id' => 54,
                'name' => 'linked_in',
                'value' => '#',
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => '2019-10-11 11:57:29',
            ),
            54 =>
            array (
                'id' => 55,
                'name' => 'default_notification',
                'value' => 'onesignal',
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => '2019-02-05 11:42:15',
            ),
            55 =>
            array (
                'id' => 56,
                'name' => 'onesignal_app_id',
                'value' => '6053d948-b8f6-472a-87e4-379fa89f78d8',
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => '2019-02-05 11:42:15',
            ),
            56 =>
            array (
                'id' => 57,
                'name' => 'onesignal_sender_id',
                'value' => '',
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => '2019-02-05 11:42:15',
            ),
            57 =>
            array (
                'id' => 58,
                'name' => 'ios_admob',
                'value' => '0',
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => '2019-05-15 10:58:05',
            ),
            58 =>
            array (
                'id' => 59,
                'name' => 'ios_admob_id',
                'value' => 'AdMob ID',
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => '2019-05-15 10:58:05',
            ),
            59 =>
            array (
                'id' => 60,
                'name' => 'ios_ad_unit_id_banner',
                'value' => 'Unit ID Banner',
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => '2019-05-15 10:58:05',
            ),
            60 =>
            array (
                'id' => 61,
                'name' => 'ios_ad_unit_id_interstitial',
                'value' => 'ID Interstitial',
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => '2019-05-15 10:58:05',
            ),
            61 =>
            array (
                'id' => 62,
                'name' => 'google_login',
                'value' => '0',
                'created_at' => NULL,
                'updated_at' => '2019-11-01 06:58:36',
            ),
            62 =>
            array (
                'id' => 63,
                'name' => 'google_app_id',
                'value' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 =>
            array (
                'id' => 64,
                'name' => 'google_secret_id',
                'value' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 =>
            array (
                'id' => 65,
                'name' => 'google_callback_url',
                'value' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 =>
            array (
                'id' => 66,
                'name' => 'facebook_callback_url',
                'value' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 =>
            array (
                'id' => 67,
                'name' => 'is_app_purchased',
                'value' => '1',
                'created_at' => NULL,
                'updated_at' => '2018-05-04 03:24:44',
            ),
            67 =>
            array (
                'id' => 68,
                'name' => 'is_web_purchased',
                'value' => '1',
                'created_at' => NULL,
                'updated_at' => '2018-05-04 03:24:44',
            ),
            68 =>
            array (
                'id' => 69,
                'name' => 'consumer_key',
                'value' => 'dadb7a7c1557917902724bbbf5',
                'created_at' => NULL,
                'updated_at' => '2019-05-15 10:58:22',
            ),
            69 =>
            array (
                'id' => 70,
                'name' => 'consumer_secret',
                'value' => '3ba77f821557917902b1d57373',
                'created_at' => NULL,
                'updated_at' => '2019-05-15 10:58:22',
            ),
            70 =>
            array (
                'id' => 71,
                'name' => 'order_email',
                'value' => 'orders@gmail.com',
                'created_at' => NULL,
                'updated_at' => '2019-10-21 07:36:53',
            ),
            71 =>
            array (
                'id' => 72,
                'name' => 'website_themes',
                'value' => '1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 =>
            array (
                'id' => 73,
                'name' => 'seo_title',
                'value' => '',
                'created_at' => NULL,
                'updated_at' => '2018-11-19 07:21:57',
            ),
            73 =>
            array (
                'id' => 74,
                'name' => 'seo_metatag',
                'value' => '',
                'created_at' => NULL,
                'updated_at' => '2018-11-19 07:21:57',
            ),
            74 =>
            array (
                'id' => 75,
                'name' => 'seo_keyword',
                'value' => '',
                'created_at' => NULL,
                'updated_at' => '2018-11-19 07:21:57',
            ),
            75 =>
            array (
                'id' => 76,
                'name' => 'seo_description',
                'value' => '',
                'created_at' => NULL,
                'updated_at' => '2018-11-19 07:21:57',
            ),
            76 =>
            array (
                'id' => 77,
                'name' => 'before_head_tag',
                'value' => '',
                'created_at' => NULL,
                'updated_at' => '2018-11-19 07:22:15',
            ),
            77 =>
            array (
                'id' => 78,
                'name' => 'end_body_tag',
                'value' => 'name',
                'created_at' => NULL,
                'updated_at' => '2019-10-11 11:57:29',
            ),
            78 =>
            array (
                'id' => 79,
                'name' => 'sitename_logo',
                'value' => 'ECommerce',
                'created_at' => NULL,
                'updated_at' => '2019-10-11 11:57:29',
            ),
            79 =>
            array (
                'id' => 80,
                'name' => 'website_name',
                'value' => '<strong>E</strong>COMMERCE',
                'created_at' => NULL,
                'updated_at' => '2018-11-19 07:22:25',
            ),
            80 =>
            array (
                'id' => 81,
                'name' => 'web_home_pages_style',
                'value' => 'two',
                'created_at' => NULL,
                'updated_at' => '2018-11-19 07:22:25',
            ),
            81 =>
            array (
                'id' => 82,
                'name' => 'web_color_style',
                'value' => 'app',
                'created_at' => NULL,
                'updated_at' => '2018-11-19 07:22:25',
            ),
            82 =>
            array (
                'id' => 83,
                'name' => 'free_shipping_limit',
                'value' => '400',
                'created_at' => NULL,
                'updated_at' => '2019-10-21 07:36:53',
            ),
            83 =>
            array (
                'id' => 84,
                'name' => 'app_icon_image',
                'value' => 'icon',
                'created_at' => NULL,
                'updated_at' => '2019-02-05 10:12:59',
            ),
            84 =>
            array (
                'id' => 85,
                'name' => 'twilio_status',
                'value' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 =>
            array (
                'id' => 86,
                'name' => 'twilio_authy_api_id',
                'value' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 =>
            array (
                'id' => 87,
                'name' => 'favicon',
                'value' => 'images/admin_logo/logo-laravel-blue-v1.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 =>
            array (
                'id' => 88,
                'name' => 'Thumbnail_height',
                'value' => '150',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 =>
            array (
                'id' => 89,
                'name' => 'Thumbnail_width',
                'value' => '150',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 =>
            array (
                'id' => 90,
                'name' => 'Medium_height',
                'value' => '400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 =>
            array (
                'id' => 91,
                'name' => 'Medium_width',
                'value' => '400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 =>
            array (
                'id' => 92,
                'name' => 'Large_height',
                'value' => '900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 =>
            array (
                'id' => 93,
                'name' => 'Large_width',
                'value' => '900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 =>
            array (
                'id' => 94,
                'name' => 'environmentt',
                'value' => 'local',
                'created_at' => NULL,
                'updated_at' => '2019-10-21 07:36:53',
            ),
            94 =>
            array (
                'id' => 95,
                'name' => 'maintenance_text',
                'value' => 'https://example.com',
                'created_at' => NULL,
                'updated_at' => '2019-10-21 07:36:53',
            ),
            95 =>
            array (
                'id' => 96,
                'name' => 'package_charge_taxt',
                'value' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 =>
            array (
                'id' => 97,
                'name' => 'order_commission',
                'value' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 =>
            array (
                'id' => 98,
                'name' => 'all_items_price_included_tax',
                'value' => 'yes',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 =>
            array (
                'id' => 99,
                'name' => 'all_items_price_included_tax_value',
                'value' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 =>
            array (
                'id' => 100,
                'name' => 'driver_accept_multiple_order',
                'value' => '1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 =>
            array (
                'id' => 101,
                'name' => 'min_order_price',
                'value' => '20',
                'created_at' => NULL,
                'updated_at' => '2019-10-21 07:36:53',
            ),
            101 =>
            array (
                'id' => 102,
                'name' => 'youtube_link',
                'value' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 =>
            array (
                'id' => 103,
                'name' => 'external_website_link',
                'value' => 'http://localhost:8000/',
                'created_at' => NULL,
                'updated_at' => '2019-10-21 07:36:53',
            ),
            103 =>
            array (
                'id' => 104,
                'name' => 'google_map_api',
                'value' => '',
                'created_at' => NULL,
                'updated_at' => '2019-10-21 07:36:53',
            ),
            104 =>
            array (
                'id' => 105,
                'name' => 'is_pos_purchased',
                'value' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 =>
            array (
                'id' => 106,
                'name' => 'admin_version',
                'value' => '1.0.5',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 =>
            array (
                'id' => 107,
                'name' => 'app_version',
                'value' => '1.0.5',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 =>
            array (
                'id' => 108,
                'name' => 'web_version',
                'value' => '1.0.5',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 =>
            array (
                'id' => 109,
                'name' => 'pos_version',
                'value' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 =>
            array (
                'id' => 110,
                'name' => 'android_app_link',
                'value' => '#',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 =>
            array (
                'id' => 111,
                'name' => 'iphone_app_link',
                'value' => '#',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 =>
            array (
                'id' => 112,
                'name' => 'about_content',
                'value' => 'Lorum Ipsum Upsum Kupsum Jipsum Mipsum Lorum Ipsum Upsum Kupsum Jipsum Mipsum Lorum Ipsum Upsum Kupsum Jipsum Mipsum Lorum Ipsum Upsum Kupsum Jipsum Mipsum Lorum Ipsum Upsum Kupsum Jipsum Mipsum Lorum Ipsum Upsum Kupsum Jipsum Mipsum Lorum Ipsum Upsum Kupsum Jipsum Mipsum',
                'created_at' => NULL,
                'updated_at' => '2019-10-11 11:57:29',
            ),
            112 =>
            array (
                'id' => 113,
                'name' => 'contact_content',
                'value' => 'Lorum Ipsum Upsum Kupsum Jipsum Mipsum Lorum Ipsum Upsum Kupsum Jipsum Mipsum Lorum Ipsum Upsum Kupsum Jipsum Mipsum Lorum Ipsum Upsum Kupsum Jipsum Mipsum Lorum Ipsum Upsum Kupsum Jipsum Mipsum Lorum Ipsum Upsum Kupsum Jipsum Mipsum Lorum Ipsum Upsum Kupsum Jipsum Mipsum',
                'created_at' => NULL,
                'updated_at' => '2019-10-11 11:57:29',
            ),
            113 =>
            array (
                'id' => 114,
                'name' => 'is_deliverboy_purchased',
                'value' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 =>
            array (
                'id' => 115,
                'name' => 'fb_redirect_url',
                'value' => 'http://YOUR_DOMAIN_NAME/login/facebook/callback',
                'created_at' => NULL,
                'updated_at' => '2019-11-01 06:58:53',
            ),
            115 =>
            array (
                'id' => 116,
                'name' => 'google_client_id',
                'value' => 'GOOGLE_CLIENT_ID',
                'created_at' => NULL,
                'updated_at' => '2019-11-01 06:58:36',
            ),
            116 =>
            array (
                'id' => 117,
                'name' => 'google_client_secret',
                'value' => 'GOOGLE_SECRET_KEY',
                'created_at' => NULL,
                'updated_at' => '2019-11-01 06:58:36',
            ),
            117 =>
            array (
                'id' => 118,
                'name' => 'google_redirect_url',
                'value' => 'http://YOUR_DOMAIN_NAME/login/google/callback',
                'created_at' => NULL,
                'updated_at' => '2019-11-01 06:58:36',
            ),
            118 =>
            array (
                'id' => 119,
                'name' => 'newsletter',
                'value' => '0',
                'created_at' => NULL,
                'updated_at' => '2019-11-01 06:58:36',
            ),
            119 =>
            array (
                'id' => 120,
                'name' => 'allow_cookies',
                'value' => '0',
                'created_at' => NULL,
                'updated_at' => '2019-11-01 06:58:36',
            ),
            120 =>
            array (
                'id' => 121,
                'name' => 'card_style',
                'value' => '1',
                'created_at' => NULL,
                'updated_at' => '2019-11-01 06:58:36',
            ),
            121 =>
            array (
                'id' => 122,
                'name' => 'banner_style',
                'value' => '1',
                'created_at' => NULL,
                'updated_at' => '2019-11-01 06:58:36',
            ),
            122 =>
            array (
                'id' => 123,
                'name' => 'mail_chimp_api',
                'value' => '',
                'created_at' => NULL,
                'updated_at' => '2019-11-01 06:58:36',
            ),
            123 =>
            array (
                'id' => 124,
                'name' => 'mail_chimp_list_id',
                'value' => '',
                'created_at' => NULL,
                'updated_at' => '2019-11-01 06:58:36',
            ),
            124 =>
            array (
                'id' => 125,
                'name' => 'newsletter_image',
                'value' => 'images/media/2019/10/newsletter.jpg',
                'created_at' => NULL,
                'updated_at' => '2019-11-01 06:58:36',
            ),
            125 =>
            array (
                'id' => 126,
                'name' => 'instauserid',
                'value' => '',
                'created_at' => NULL,
                'updated_at' => '2019-11-01 06:58:36',
            ),
            126 =>
            array (
                'id' => 127,
                'name' => 'is_enable_location',
                'value' => 0,
                'created_at' => NULL,
                'updated_at' => '2019-11-01 06:58:36',
            ),
            127 =>
            array (
                'id' => 128,
                'name' => 'default_latitude',
                'value' => '',
                'created_at' => NULL,
                'updated_at' => '2019-11-01 06:58:36',
            ),
            128 =>
            array (
                'id' => 129,
                'name' => 'default_longitude',
                'value' => '',
                'created_at' => NULL,
                'updated_at' => '2019-11-01 06:58:36',
            ),
            129 =>
            array (
                'id' => 130,
                'name' => 'web_card_style',
                'value' => 1,
                'created_at' => NULL,
                'updated_at' => '2019-11-01 06:58:36',
            ),
            130 =>
            array (
                'id' => 131,
                'name' => 'auth_domain',
                'value' => 1,
                'created_at' => NULL,
                'updated_at' => '2019-11-01 06:58:36',
            ),
            131 =>
            array (
                'id' => 132,
                'name' => 'database_URL',
                'value' => '',
                'created_at' => NULL,
                'updated_at' => '2019-11-01 06:58:36',
            ),
            132 =>
            array (
                'id' => 133,
                'name' => 'projectId',
                'value' => '',
                'created_at' => NULL,
                'updated_at' => '2019-11-01 06:58:36',
            ),
            133 =>
            array (
                'id' => 134,
                'name' => 'storage_bucket',
                'value' => '',
                'created_at' => NULL,
                'updated_at' => '2019-11-01 06:58:36',
            ),
            134 =>
            array (
                'id' => 135,
                'name' => 'messaging_senderid',
                'value' => '',
                'created_at' => NULL,
                'updated_at' => '2019-11-01 06:58:36',
            ),
            135 =>
            array (
                'id' => 136,
                'name' => 'firebase_apikey',
                'value' => '',
                'created_at' => NULL,
                'updated_at' => '2019-11-01 06:58:36',
            ),
            136 =>
            array (
                'id' => 137,
                'name' => 'home_categories_img_icn',
                'value' => 'Icon',
                'created_at' => NULL,
                'updated_at' => '2019-11-01 06:58:36',
            ),
            137 =>
            array (
                'id' => 138,
                'name' => 'home_categories_records',
                'value' => '6',
                'created_at' => NULL,
                'updated_at' => '2019-11-01 06:58:36',
            ),
            138 =>
            array (
                'id' => 139,
                'name' => 'home_category',
                'value' => '',
                'created_at' => NULL,
                'updated_at' => '2019-11-01 06:58:36',
            ),
            139 =>
            array (
                'id' => 140,
                'name' => 'firebase_appid',
                'value' => '',
                'created_at' => NULL,
                'updated_at' => '2019-11-01 06:58:36',
            ),
            140 =>
            array (
                'id' => 141,
                'name' => 'maptype',
                'value' => 'external',
                'created_at' => NULL,
                'updated_at' => '2019-11-01 06:58:36',
            ),

            
        ));


    }
}
