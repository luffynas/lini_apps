<?php

use Illuminate\Database\Seeder;

class ProcCategory extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('proc_questions_category')->insert([
            [ 'id'   => 1, 'name' => 'bts'],
            [ 'id'   => 2, 'name' => 'sacme'],
            [ 'id'   => 3, 'name' => 'sis'],
            [ 'id'   => 4, 'name' => 'cme'],
            [ 'id'   => 5, 'name' => 'dismantle'],
            [ 'id'   => 6, 'name' => 'sitac'],
            [ 'id'   => 7, 'name' => 'pln'],
            [ 'id'   => 8, 'name' => 'ses'],
            [ 'id'   => 9, 'name' => 'maintenance'],
        ]);
    }
}
