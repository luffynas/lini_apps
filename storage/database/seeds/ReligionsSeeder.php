<?php

use Illuminate\Database\Seeder;

class ReligionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('religions')->insert([
            [ 'id'   => 1, 'name' => 'islam'],
            [ 'id'   => 2, 'name' => 'kristen'],
            [ 'id'   => 3, 'name' => 'katolik'],
            [ 'id'   => 4, 'name' => 'hindu'],
            [ 'id'   => 5, 'name' => 'budha'],
            [ 'id'   => 6, 'name' => 'konghucu'],
        ]);
    }
}
