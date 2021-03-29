<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use DB;

class MaterialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Material::factory(30)->create();
        DB::table('materials')->insert([
            'code' => '00001',
            'type' => '00002',
            'name' => '자재 1 ',
            'short_name' => '자재',
            'model_code' => '00003',
            'color' => 'white',
            'unit_code' => '00033',
            'unit_qty' => '100'
        ]);
    }
}
