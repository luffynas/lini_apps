<?php

use Illuminate\Database\Seeder;

class ProjectReportAllFormatTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('project_report_all_format_type')->insert([
            [ 'id'   => 1, 'name' => 'image'],
            [ 'id'   => 2, 'name' => 'text'],
            [ 'id'   => 3, 'name' => 'title'],
            [ 'id'   => 4, 'name' => 'video'],
            [ 'id'   => 5, 'name' => 'mix'],
            [ 'id'   => 6, 'name' => 'file'],
        ]);
    }
}
