<?php

use Illuminate\Database\Seeder;

class dc_status_master extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dc_status_master')->insert([
            'dc_status' => "1",
            'dc_status_description' => "ready for loading",

        ]);

        DB::table('dc_status_master')->insert([
            'dc_status' => "2",
            'dc_status_description' => "dispatched",

        ]);


        DB::table('dc_status_master')->insert([
            'dc_status' => "3",
            'dc_status_description' => "delivered",

        ]);


    }
}
