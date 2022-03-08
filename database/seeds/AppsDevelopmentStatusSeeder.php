<?php

use Illuminate\Database\Seeder;

class AppsDevelopmentStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('apps_development_status')->insert([
            [ 'id'   => 1, 'name' => 'on progress'],
            [ 'id'   => 2, 'name' => 'postpone'],
            [ 'id'   => 3, 'name' => 'canceled'],
            [ 'id'   => 4, 'name' => 'done'],
        ]);
    }
}
