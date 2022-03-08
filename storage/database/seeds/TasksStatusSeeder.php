<?php

use Illuminate\Database\Seeder;

class TasksStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks_status')->insert([
            [ 'ts_id'   => 1, 'ts_name' => 'akan datang'],
            [ 'ts_id'   => 2, 'ts_name' => 'dalam pengerjaan'],
            [ 'ts_id'   => 3, 'ts_name' => 'selesai'],
        ]);
    }
}
