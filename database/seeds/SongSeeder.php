<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            array(
                "id" => 1,
                "name" => "Mary Roose (CB 36)",
                "file_path" => "media/sounds/Checkie_Brown_-_09_-_Mary_Roose_CB_36.mp3",
                "category_id" => 1,
            ),
            array(
                "id" => 2,
                "name" => "Brain - Instrumental Retro (ID 1271)",
                "file_path" => "media/sounds/Lobo_Loco_-_01_-_Brain_ID_1270.mp3",
                "category_id" => 1,
            ),
            array(
                "id" => 3,
                "name" => "You get the Blues (ID 1201)",
                "file_path" => "media/sounds/You_get_the_Blues_ID_1201.mp3",
                "category_id" => 1,
            ),
        );
        
        DB::table('songs')->insert($data);
    }
}
