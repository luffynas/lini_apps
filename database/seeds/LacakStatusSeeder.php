<?php

use Illuminate\Database\Seeder;

class LacakStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lacak_status')->insert([
            [ 'id'   => 1, 'name' => 'proses'],
            [ 'id'   => 2, 'name' => 'penjemputan barang'],
            [ 'id'   => 3, 'name' => 'loading port'],
            [ 'id'   => 4, 'name' => 'barang telah diterima'],
            [ 'id'   => 5, 'name' => 'selesai'],
        ]);
    }
}
