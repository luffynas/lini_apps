<?php

use Illuminate\Database\Seeder;

class ProjectExpenseStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('project_expenses_status')->insert([
            [ 'id'   => 1, 'name' => 'draft'],
            [ 'id'   => 2, 'name' => 'submitted'],
            [ 'id'   => 3, 'name' => 'approved by QC'],
            [ 'id'   => 4, 'name' => 'approved by PM'],
        ]);
    }
}
