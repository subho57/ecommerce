<?php

use Illuminate\Database\Seeder;

class MenuTranslationTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_translation')->delete();
        
        \DB::table('menu_translation')->insert(array (
            0 => 
            array (
                'id' => 2,
                'menu_id' => 1,
                'language_id' => 1,
                'menu_name' => 'Home',
            ),
            1 => 
            array (
                'id' => 3,
                'menu_id' => 1,
                'language_id' => 2,
                'menu_name' => 'Homee',
            ),
            2 => 
            array (
                'id' => 11,
                'menu_id' => 2,
                'language_id' => 1,
                'menu_name' => 'SHOP',
            ),
            3 => 
            array (
                'id' => 12,
                'menu_id' => 2,
                'language_id' => 2,
                'menu_name' => 'SHOP',
            ),
            4 => 
            array (
                'id' => 39,
                'menu_id' => 21,
                'language_id' => 1,
                'menu_name' => 'Demo',
            ),
            5 => 
            array (
                'id' => 40,
                'menu_id' => 21,
                'language_id' => 2,
                'menu_name' => 'Demo',
            ),
            6 => 
            array (
                'id' => 41,
                'menu_id' => 22,
                'language_id' => 1,
                'menu_name' => 'Contact Us',
            ),
            7 => 
            array (
                'id' => 42,
                'menu_id' => 22,
                'language_id' => 2,
                'menu_name' => 'Contact Us',
            ),
        ));
        
        
    }
}