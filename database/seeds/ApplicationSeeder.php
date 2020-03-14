<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ApplicationsTableSeeder extends Seeder
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
                "name" => "mobile",
                "app_key" => "475215381354521318",
                "app_secret" => Hash::make("75eff3bf_9d7e_40a1_840b_1e69913d4bbc_d0dacf81_d507_4aac_b612_44bb2dd79215"),
                "created_at" => DB::raw('NOW()'),
                "updated_at" => NULL,
                "deleted_at" => NULL,
            ),
        );        
        DB::table('applications')->insert($data);
    }
}
