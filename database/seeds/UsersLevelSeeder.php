<?php

use Illuminate\Database\Seeder;

class UsersLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users_level')->insert([
            [ 'id'   => 1, 'name' => 'staff'],
            [ 'id'   => 2, 'name' => 'project coordinator'],
            [ 'id'   => 3, 'name' => 'project manager'],
            [ 'id'   => 4, 'name' => 'QC document'],
            [ 'id'   => 5, 'name' => 'QC tools'],
            [ 'id'   => 6, 'name' => 'QC expense'],
        ]);
    }
}
