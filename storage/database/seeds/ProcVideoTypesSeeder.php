<?php

use Illuminate\Database\Seeder;

class ProcVideoTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('proc_videos_types')->insert([
            [ 'id'   => 1, 'name' => 'corporate cultre'],
            [ 'id'   => 2, 'name' => 'training'],
        ]);
    }
}
