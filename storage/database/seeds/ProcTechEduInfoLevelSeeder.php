<?php

use Illuminate\Database\Seeder;

class ProcTechEduInfoLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tech_education_info_level')->insert([
            [ 'id'   => 1, 'name' => 'smp'],
            [ 'id'   => 2, 'name' => 'sma'],
            [ 'id'   => 3, 'name' => 'd1'],
            [ 'id'   => 4, 'name' => 'd2'],
            [ 'id'   => 5, 'name' => 'd3'],
            [ 'id'   => 6, 'name' => 's1'],
            [ 'id'   => 7, 'name' => 's2'],
            [ 'id'   => 8, 'name' => 's3'],
            [ 'id'   => 9, 'name' => 'lainnya'],
        ]);
    }
}
