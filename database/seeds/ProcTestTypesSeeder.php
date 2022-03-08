<?php

use Illuminate\Database\Seeder;

class ProcTestTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('proc_test_types')->insert([
            [ 'id'   => 1, 'name' => 'Psychology'],
            [ 'id'   => 2, 'name' => 'Competency'],
            [ 'id'   => 3, 'name' => 'Assessment'],
        ]);
    }
}
