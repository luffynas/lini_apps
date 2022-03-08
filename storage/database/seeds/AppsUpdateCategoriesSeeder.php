<?php

use Illuminate\Database\Seeder;

class AppsUpdateCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('apps_update_categories')->insert([
            [ 'id'   => 1, 'name' => 'all'],
            [ 'id'   => 2, 'name' => 'user'],
            [ 'id'   => 3, 'name' => 'tech'],
            [ 'id'   => 4, 'name' => 'admin'],
        ]);
    }
}
