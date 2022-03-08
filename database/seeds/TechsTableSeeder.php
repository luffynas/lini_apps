<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TechsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('techs')->insert([
            'id'   => 1,
            'user_type' => 'tech',
            'title' => 'teknisi',
            'name' => 'sastro',
            'firstname' => 'sastro',
            'lastname' => 'dimejo',
            'image' => 'default.png',
            'email' => 'tech@limaintisinergi.com',
            'password' => bcrypt('bismillah03'),
            'is_verified' => 1,
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'active' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
