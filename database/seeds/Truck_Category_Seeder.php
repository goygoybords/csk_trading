<?php

use Illuminate\Database\Seeder;

class Truck_Category_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //
        DB::table('truck_category')->insert([
            'description' => 'ALUMINUM VANS',
            'slug' => 'aluminum-vans',
            'status' => 1,
        ]);
        DB::table('truck_category')->insert([
            'description' => "CAB CHASSIS",
            'slug' => 'cab-chassis',
            'status' => 1,
        ]);
        DB::table('truck_category')->insert([
            'description' => "CARGO TRUCKS",
            'slug' => 'cargo-trucks',
            'status' => 1,
        ]);
        DB::table('truck_category')->insert([
            'description' => "DUMP TRUCKS",
            'slug' => 'dump-trucks',
            'status' => 1,
        ]);
        DB::table('truck_category')->insert([
            'description' => "CHILLER VANS",
            'slug' => 'chiller-vans',
            'status' => 1,
        ]);

        DB::table('truck_category')->insert([
            'description' => "OTHER EQUIPMENTS",
            'slug' => 'other-equipments',
            'status' => 1,
        ]);
    }
}
