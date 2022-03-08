<?php

use Illuminate\Database\Seeder;

class ProjectReportStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects_report_status')->insert([
            [ 'id'   => 1, 'name' => 'draft'],
            [ 'id'   => 2, 'name' => 'approved by PM'],
            [ 'id'   => 3, 'name' => 'approved by partner'],
            [ 'id'   => 4, 'name' => 'approved by customer'],
        ]);
    }
}
