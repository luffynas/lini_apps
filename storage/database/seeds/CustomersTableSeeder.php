<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            'id'   => 1,
            'user_type' => 'cust',
            'title' => 'customer',
            'name' => 'customer',
            'firstname' => 'customer',
            'lastname' => 'lini',
            'email' => 'customer@limaintisinergi.com',
            'password' => bcrypt('bismillah03'),
            'is_verified' => 1,
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'active' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
