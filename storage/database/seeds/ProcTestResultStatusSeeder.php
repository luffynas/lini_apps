<?php

use Illuminate\Database\Seeder;

class ProcTestResultStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('proc_test_results_status')->insert([
            [ 'id'   => 1, 'name' => 'Gagal'],
            [ 'id'   => 2, 'name' => 'Lulus'],
        ]);
    }
}
