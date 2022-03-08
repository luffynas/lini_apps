<?php

use Illuminate\Database\Seeder;

class ProjectPaymentSummaryStatus extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('project_payment_summary_status')->insert([
            [ 'id'   => 1, 'name' => 'submitted'],
            [ 'id'   => 2, 'name' => 'approved by QC'],
            [ 'id'   => 3, 'name' => 'approved by PM'],
        ]);
    }
}
