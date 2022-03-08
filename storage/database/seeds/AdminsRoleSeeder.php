<?php

use Illuminate\Database\Seeder;

class AdminsRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins_role')->insert([
            [ 'id'   => 1, 'name' => 'super admin'],
            [ 'id'   => 2, 'name' => 'admin'],
            [ 'id'   => 3, 'name' => 'content'],
        ]);
    }
}
