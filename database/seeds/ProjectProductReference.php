<?php

use Illuminate\Database\Seeder;

class ProjectProductReference extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('project_product_reference')->insert([
            [ 'id'   => 1, 'code' => 'PJ', 'description' => 'Pengiriman Project'],
            [ 'id'   => 2, 'code' => 'PJ01', 'description' => 'Penginapan Dalam Kota'],
            [ 'id'   => 3, 'code' => 'PJ02', 'description' => 'Tiket Pesawat'],
            [ 'id'   => 4, 'code' => 'PJ03', 'description' => 'Transport On-Site'],
            [ 'id'   => 5, 'code' => 'PJ04', 'description' => 'Porter (Tenaga Bantu) On-Site'],
            [ 'id'   => 6, 'code' => 'PJ05', 'description' => 'Perijinan Project'],
            [ 'id'   => 7, 'code' => 'PJ07', 'description' => 'Material Tools Consumables On-Site'],
            [ 'id'   => 8, 'code' => 'PJ08', 'description' => 'Pulsa Teknisi'],
            [ 'id'   => 9, 'code' => 'PJ09', 'description' => 'Additional Mandays'],
            [ 'id'   => 10, 'code' => 'PJ10', 'description' => 'Jasa Teknisi Freelance'],
            [ 'id'   => 11, 'code' => 'PJ11', 'description' => 'Jasa Drive Test'],
            [ 'id'   => 12, 'code' => 'PJ12', 'description' => 'Material CME'],
            [ 'id'   => 13, 'code' => 'PJ13', 'description' => 'Biaya Kesehatan Teknisi'],
            [ 'id'   => 14, 'code' => 'PJ14', 'description' => 'Kalibrasi & Testing Tool'],
            [ 'id'   => 15, 'code' => 'PJ15', 'description' => 'By ComCase'],
            [ 'id'   => 16, 'code' => 'PJ16', 'description' => 'Asuransi Proyek'],
        ]);
    }
}
