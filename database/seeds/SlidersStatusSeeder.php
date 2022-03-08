<?php

use Illuminate\Database\Seeder;

class SlidersStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders_status')->insert([
            [ 'id'   => 1, 'name' => 'Active'],
            [ 'id'   => 2, 'name' => 'Inactive'],
        ]);
    }
}
