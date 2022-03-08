<?php

use Illuminate\Database\Seeder;

class ItemsCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items_category')->insert([
            [ 'id'   => 1, 'name' => 'it'],
            [ 'id'   => 2, 'name' => 'atk'],
            [ 'id'   => 3, 'name' => 'umum'],
            [ 'id'   => 4, 'name' => 'service'],
            [ 'id'   => 5, 'name' => 'rtk'],
            [ 'id'   => 6, 'name' => 'media promosi'],
        ]);
    }
}
