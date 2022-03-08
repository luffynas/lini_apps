<?php

use Illuminate\Database\Seeder;

class ProjectCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects_category')->insert([
            [ 'id'   => 1, 'name' => 'bts', 'folder' => 'bts'],
            [ 'id'   => 2, 'name' => 'sacme', 'folder' => 'sacme'],
            [ 'id'   => 3, 'name' => 'sis', 'folder' => 'sis'],
            [ 'id'   => 4, 'name' => 'cme', 'folder' => 'cme'],
            [ 'id'   => 5, 'name' => 'dismantle', 'folder' => 'dismantle'],
            [ 'id'   => 6, 'name' => 'sitac', 'folder' => 'sitac'],
            [ 'id'   => 7, 'name' => 'pln', 'folder' => 'pln'],
            [ 'id'   => 8, 'name' => 'ses', 'folder' => 'ses'],
            [ 'id'   => 9, 'name' => 'maintenance', 'folder' => 'maintenance'],
        ]);
    }
}
