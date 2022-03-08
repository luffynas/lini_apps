<?php

use Illuminate\Database\Seeder;

class TasksLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks_level')->insert([
            [ 'tl_id'   => 1, 'tl_name' => 'normal'],
            [ 'tl_id'   => 2, 'tl_name' => 'sedang'],
            [ 'tl_id'   => 3, 'tl_name' => 'urgent'],
        ]);
    }
}
