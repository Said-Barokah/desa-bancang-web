<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProvincesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provinces = array(
            array('id' => '1','name' => 'ACEH'),
            array('id' => '2','name' => 'SUMATERA UTARA'),
            array('id' => '3','name' => 'SUMATERA BARAT'),
            array('id' => '4','name' => 'RIAU'),
            array('id' => '5','name' => 'JAMBI'),
            array('id' => '6','name' => 'SUMATERA SELATAN'),
            array('id' => '7','name' => 'BENGKULU'),
            array('id' => '8','name' => 'LAMPUNG'),
            array('id' => '9','name' => 'KEPULAUAN BANGKA BELITUNG'),
            array('id' => '10','name' => 'KEPULAUAN RIAU'),
            array('id' => '11','name' => 'DKI JAKARTA'),
            array('id' => '12','name' => 'JAWA BARAT'),
            array('id' => '13','name' => 'JAWA TENGAH'),
            array('id' => '14','name' => 'DI YOGYAKARTA'),
            array('id' => '15','name' => 'JAWA TIMUR'),
            array('id' => '16','name' => 'BANTEN'),
            array('id' => '17','name' => 'BALI'),
            array('id' => '18','name' => 'NUSA TENGGARA BARAT'),
            array('id' => '19','name' => 'NUSA TENGGARA TIMUR'),
            array('id' => '20','name' => 'KALIMANTAN BARAT'),
            array('id' => '21','name' => 'KALIMANTAN TENGAH'),
            array('id' => '22','name' => 'KALIMANTAN SELATAN'),
            array('id' => '23','name' => 'KALIMANTAN TIMUR'),
            array('id' => '24','name' => 'KALIMANTAN UTARA'),
            array('id' => '25','name' => 'SULAWESI UTARA'),
            array('id' => '26','name' => 'SULAWESI TENGAH'),
            array('id' => '27','name' => 'SULAWESI SELATAN'),
            array('id' => '28','name' => 'SULAWESI TENGGARA'),
            array('id' => '29','name' => 'GORONTALO'),
            array('id' => '30','name' => 'SULAWESI BARAT'),
            array('id' => '31','name' => 'MALUKU'),
            array('id' => '32','name' => 'MALUKU UTARA'),
            array('id' => '33','name' => 'PAPUA'),
            array('id' => '34','name' => 'PAPUA BARAT')
          );

          DB::table('provinces')->insert($provinces);
    }
}
