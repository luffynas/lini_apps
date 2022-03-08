<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id'   => 1,
            'user_type' => 'user',
            'department_id' => 1,
            'title' => 'staff',
            'name' => 'kim',
            'firstname' => 'kim',
            'lastname' => 'hendarto',
            'image' => 'kim.jpg',
            'email' => 'user@limaintisinergi.com',
            'password' => bcrypt('bismillah03'),
            'is_verified' => 1,
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'active' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
