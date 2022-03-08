<?php

use Illuminate\Database\Seeder;

class ProjectToolsReportStatus extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('project_tools_report_status')->insert([
            [ 'id'   => 1, 'name' => 'draft'],
            [ 'id'   => 2, 'name' => 'reviewed'],
            [ 'id'   => 3, 'name' => 'approved']
        ]);
    }
}
