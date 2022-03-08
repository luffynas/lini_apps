<?php

use Illuminate\Database\Seeder;

class WfhToWfoStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wfh_to_wfo_request_status')->insert([
            [ 'id'   => 1, 'name' => 'submitted'],
            [ 'id'   => 2, 'name' => 'approved'],
        ]);
    }
}
