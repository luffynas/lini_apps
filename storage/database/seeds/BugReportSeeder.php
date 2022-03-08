<?php

use Illuminate\Database\Seeder;

class BugReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bug_report_status')->insert([
            [ 'id'   => 1, 'name' => 'Submitted'],
            [ 'id'   => 2, 'name' => 'On Progress'],
            [ 'id'   => 3, 'name' => 'Done'],
        ]);
    }
}
