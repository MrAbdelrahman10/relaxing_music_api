<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
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
                "name" => "Blues",
                "background_image" => "",
            ),
            array(
                "id" => 2,
                "name" => "Classical",
                "background_image" => "",
            ),
            array(
                "id" => 3,
                "name" => "Country",
                "background_image" => "",
            ),
            array(
                "id" => 4,
                "name" => "Electronic",
                "background_image" => "",
            ),
            array(
                "id" => 5,
                "name" => "Folk",
                "background_image" => "",
            ),
            array(
                "id" => 6,
                "name" => "Hip-hop",
                "background_image" => "",
            ),
            array(
                "id" => 7,
                "name" => "Jazz",
                "background_image" => "",
            ),
            array(
                "id" => 8,
                "name" => "Reggae",
                "background_image" => "",
            ),
            array(
                "id" => 9,
                "name" => "Religious",
                "background_image" => "",
            ),
            array(
                "id" => 10,
                "name" => "Rock",
                "background_image" => "",
            ),
            array(
                "id" => 11,
                "name" => "Traditional",
                "background_image" => "",
            ),
        );        
        DB::table('categories')->insert($data);
    }
}
