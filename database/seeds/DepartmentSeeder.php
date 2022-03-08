<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('department')->insert([
            [ 'id'   => 1, 'name' => 'project', 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            [ 'id'   => 2, 'name' => 'human resources', 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            [ 'id'   => 3, 'name' => 'finance', 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            [ 'id'   => 4, 'name' => 'general afair', 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            [ 'id'   => 5, 'name' => 'information technology', 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            [ 'id'   => 6, 'name' => 'business controll', 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            [ 'id'   => 7, 'name' => 'sales and marketing', 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            [ 'id'   => 8, 'name' => 'digital marketing', 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
        ]);
    }
}
