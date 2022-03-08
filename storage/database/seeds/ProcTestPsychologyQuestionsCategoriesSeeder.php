<?php

use Illuminate\Database\Seeder;

class ProcTestPsychologyQuestionsCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('proc_test_psychology_questions_categories')->insert([
            [ 'id'   => 1, 'name' => 'Extrovert'],
            [ 'id'   => 2, 'name' => 'Sensing'],
            [ 'id'   => 3, 'name' => 'Thinking'],
            [ 'id'   => 4, 'name' => 'Judging'],
        ]);
    }
}
