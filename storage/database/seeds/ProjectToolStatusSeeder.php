<?php

use Illuminate\Database\Seeder;

class ProjectToolStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('project_tools_status')->insert([
            [ 'id'   => 1, 'name' => 'baik, lengkap'],
            [ 'id'   => 2, 'name' => 'baik, tidak lengkap'],
            [ 'id'   => 3, 'name' => 'rusak, lengkap'],
            [ 'id'   => 4, 'name' => 'rusak, tidak lengkap'],
        ]);
    }
}
