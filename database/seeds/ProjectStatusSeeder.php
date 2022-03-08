<?php

use Illuminate\Database\Seeder;

class ProjectStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects_status')->insert([
            [ 'id'   => 1, 'name' => 'in preparation'],
            [ 'id'   => 2, 'name' => 'on progress'],
            [ 'id'   => 3, 'name' => 'reporting'],
            [ 'id'   => 4, 'name' => 'finished'],
        ]);
    }
}
