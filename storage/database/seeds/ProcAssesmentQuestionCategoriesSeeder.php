<?php

use Illuminate\Database\Seeder;

class ProcAssesmentQuestionCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('proc_assesment_questions_categories')->insert([
            [ 'id'   => 1, 'name' => 'Materi Berita Acara'],
            [ 'id'   => 2, 'name' => 'Materi Expense'],
            [ 'id'   => 3, 'name' => 'Materi K3'],
            [ 'id'   => 4, 'name' => 'Materi Instalasi'],
    }
}
