<?php

use Illuminate\Database\Seeder;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_type')->insert([
            [ 'id'   => 1, 'name' => 'admin'],
            [ 'id'   => 2, 'name' => 'user']
        ]);
    }
}
