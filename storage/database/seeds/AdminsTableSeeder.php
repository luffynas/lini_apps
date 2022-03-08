<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'id'   => 1,
            'user_type' => 'admin',
            'role' => 1,
            'department_id' => 1,
            'title' => 'superadmin',
            'name' => 'admin',
            'firstname' => 'admin',
            'lastname' => 'lini',
            'image' => 'admin.jpg',
            'email' => 'admin@limaintisinergi.com',
            'password' => bcrypt('bismillah03'),
            'is_verified' => 1,
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'active' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
