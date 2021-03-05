<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TopOffersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('top_offers')->delete();
        
        \DB::table('top_offers')->insert(array (
            0 => 
            array (
                'top_offers_id' => 1,
                'top_offers_text' => '<div class=\"pro-info\">
                Get<strong> UPTO 40% OFF </strong>on your 1st order
                <div class=\"pro-link-dropdown js-toppanel-link-dropdown\">
                  <a href=\"shop-page1.html\" class=\"pro-dropdown-toggle\">
                    More details
                  </a>
                  
                </div>
            </div>',
                'language_id' => 1,
                'created_at' => '2020-02-04 05:14:16',
                'created_at' => '2020-02-04 05:14:16',
            ),
            1 => 
            array (
                'top_offers_id' => 2,
                'top_offers_text' => '<div class=\"pro-info\">
                Get<strong> UPTO 40% OFF </strong>on your 1st order
                <div class=\"pro-link-dropdown js-toppanel-link-dropdown\">
                  <a href=\"shop-page1.html\" class=\"pro-dropdown-toggle\">
                    More details
                  </a>
                  
                </div>
            </div>',
                'language_id' => 1,
                'created_at' => '2020-02-04 05:14:16',
                'created_at' => '2020-02-04 05:14:16',
            )
        ));
    }
}