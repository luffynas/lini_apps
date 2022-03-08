<?php

use Illuminate\Database\Seeder;

class KnowledgeCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('knowledge_category')->insert([
            [ 'id'   => 1, 'name' => 'troubleshooting'],
            [ 'id'   => 2, 'name' => 'tutorial'],
        ]);
    }
}
