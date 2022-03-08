<?php

use Illuminate\Database\Seeder;

class ProjectReportImageStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('project_report_images_status')->insert([
            [ 'id'   => 1, 'name' => 'draft'],
            [ 'id'   => 2, 'name' => 'reviewed'],
            [ 'id'   => 3, 'name' => 'approved by Document Admin'],
            [ 'id'   => 4, 'name' => 'approved by PM'],
        ]);
    }
}
