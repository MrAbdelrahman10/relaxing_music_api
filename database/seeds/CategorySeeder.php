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
                "background_image" => "media/images/blues.jpg",
            ),
            array(
                "id" => 2,
                "name" => "Classical",
                "background_image" => "media/images/classical.jpg",
            ),
            array(
                "id" => 3,
                "name" => "Country",
                "background_image" => "media/images/country.jpg",
            ),
            array(
                "id" => 4,
                "name" => "Electronic",
                "background_image" => "media/images/electronic.jpg",
            ),
            array(
                "id" => 5,
                "name" => "Folk",
                "background_image" => "media/images/folk.jpg",
            ),
            array(
                "id" => 6,
                "name" => "Hip-hop",
                "background_image" => "media/images/hip_hop.jpg",
            ),
            array(
                "id" => 7,
                "name" => "Jazz",
                "background_image" => "media/images/jazz.jpg",
            ),
            array(
                "id" => 8,
                "name" => "Reggae",
                "background_image" => "media/images/reggae.jpg",
            ),
            array(
                "id" => 9,
                "name" => "Religious",
                "background_image" => "media/images/religious.jpg",
            ),
            array(
                "id" => 10,
                "name" => "Rock",
                "background_image" => "media/images/rock.jpg",
            ),
            array(
                "id" => 11,
                "name" => "Traditional",
                "background_image" => "media/images/traditional.jpg",
            ),
        );        
        DB::table('categories')->insert($data);
    }
}
