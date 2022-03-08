<?php

use Illuminate\Database\Seeder;

class ProcTechDocTypeSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('proc_tech_documents_type')->insert([
            [ 'id'   => 1, 'name' => 'kk'],
            [ 'id'   => 2, 'name' => 'ktp'],
            [ 'id'   => 3, 'name' => 'npwp'],
            [ 'id'   => 4, 'name' => 'buku tabungan'],
            [ 'id'   => 5, 'name' => 'ijazah'],
        ]);
    }
}
