<?php

use Illuminate\Database\Seeder;

class BlogsStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs_status')->insert([
            [ 'id'   => 1, 'name' => 'draft'],
            [ 'id'   => 2, 'name' => 'submitted'],
            [ 'id'   => 3, 'name' => 'department'],
            [ 'id'   => 4, 'name' => 'corporate'],
        ]);
    }
}
