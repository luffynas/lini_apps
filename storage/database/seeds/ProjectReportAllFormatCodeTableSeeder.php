<?php

use Illuminate\Database\Seeder;

class ProjectReportAllFormatCodeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('project_report_all_format_code')->insert([
            [ 'id'   => 1, 'title' => '1', 'text_count' => '', 'image_count' => '', 'video_count' => ''],
            [ 'id'   => 2, 'title' => '2', 'text_count' => '', 'image_count' => '', 'video_count' => ''],
            [ 'id'   => 3, 'title' => '', 'text_count' => '1', 'image_count' => '', 'video_count' => ''],
            [ 'id'   => 4, 'title' => '', 'text_count' => '2', 'image_count' => '', 'video_count' => ''],
            [ 'id'   => 5, 'title' => '', 'text_count' => '', 'image_count' => '1', 'video_count' => ''],
            [ 'id'   => 6, 'title' => '', 'text_count' => '', 'image_count' => '2', 'video_count' => ''],
            [ 'id'   => 7, 'title' => '', 'text_count' => '', 'image_count' => '3', 'video_count' => ''],
            [ 'id'   => 8, 'title' => '', 'text_count' => '1', 'image_count' => '1', 'video_count' => ''],
            [ 'id'   => 9, 'title' => '', 'text_count' => '1', 'image_count' => '2', 'video_count' => ''],
        ]);
    }
}
