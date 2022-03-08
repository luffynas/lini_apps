<?php

use Illuminate\Database\Seeder;

class UserCovidTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('covid_test_request_status')->insert([
            [ 'id'   => 1, 'name' => 'draft'],
            [ 'id'   => 2, 'name' => 'on progress'],
            [ 'id'   => 3, 'name' => 'done'],
        ]);
    }
}
