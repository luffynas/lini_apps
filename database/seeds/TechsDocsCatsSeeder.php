<?php

use Illuminate\Database\Seeder;

class TechsDocsCatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('techs_docs_cats')->insert([
            [ 'id'   => 1, 'name' => 'foto'],
            [ 'id'   => 2, 'name' => 'ktp'],
            [ 'id'   => 3, 'name' => 'sertifikat'],
        ]);
    }
}
