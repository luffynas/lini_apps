<?php

use Illuminate\Database\Seeder;

class BlogTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs_type')->insert([
            [ 'id'   => 1, 'name' => 'blog'],
            [ 'id'   => 2, 'name' => 'manual'],
            [ 'id'   => 3, 'name' => 'note'],
            [ 'id'   => 4, 'name' => 'riset'],
        ]);
    }
}
