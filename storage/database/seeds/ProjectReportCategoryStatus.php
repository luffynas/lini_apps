<?php

use Illuminate\Database\Seeder;

class ProjectReportCategoryStatus extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('project_report_category_status')->insert([
            [ 'id'   => 1, 'name' => 'active'],
            [ 'id'   => 2, 'name' => 'non active'],
            [ 'id'   => 3, 'name' => 'pending'],
            [ 'id'   => 4, 'name' => 'deleted'],
        ]);
    }
}
