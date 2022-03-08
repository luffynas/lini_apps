<?php

use Illuminate\Database\Seeder;

class CompanyInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('company_info')->insert([
            'id'   => 1,
            'name' => 'lima inti sinergi',
            'rek' => '-',
            'phone' => '021.28541102',
            'mobile' => '0',
            'email' => 'marketing@limaintisinergi.com',
            'url' => 'limaintisindergi.com',
            'brief' => 'Lima Inti Sinergi (LINI) adalah perusahaan yang bergerak di bidang Layanan Jasa Telekomunikasi dan Teknologi Informasi.',
            'keywords' => 'Layanan jasa site survey instalasi dan pemeliharaan perangkat telekomunikasi dan jaringan',
            'slogan' => 'Penyedia jasa pembuat website dan aplikasi',
            'address' => 'Jl. Albarkah No.9, RT.12/RW.3, Manggarai Selatan, Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12860.',
            'map' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15865.304230417349!2d106.8487744!3d-6.2206651!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x84388c8f864e7175!2sPT.%20Lima%20Inti%20Sinergi!5e0!3m2!1sen!2sid!4v1611301931524!5m2!1sen!2sid',
            'logo' => 'logo.png',
            'year' => '2013',
        ]);
    }
}
