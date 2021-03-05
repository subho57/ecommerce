<?php

use Illuminate\Database\Seeder;

class MediaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('image_categories')->delete();

        \DB::table('image_categories')->insert(array (
            0 =>
            array (
                'id' => 1,
                'image_id' => '1',
                'image_type' => 'ACTUAL',
                'height' => 20,
                'width' => 30,
                'path' => 'images/media/2019/06/IbHQO10809.jpg'
            ),
        ));


    }
}
