<?php

namespace Database\Seeders;

use App\Models\ApparatusPosition;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApparatusPositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $apparatus_positions = array(
            array('id' => '1','position' => 'Kepala Desa','created_at' => '2022-07-17 05:06:22','updated_at' => '2022-07-17 05:06:22'),
            array('id' => '2','position' => 'Sekretaris Desa','created_at' => '2022-07-17 05:06:22','updated_at' => '2022-07-17 05:06:22'),
            array('id' => '3','position' => 'Kasi Pemerintahan','created_at' => '2022-07-17 05:06:22','updated_at' => '2022-07-17 05:06:22'),
            array('id' => '4','position' => 'Kasi Pelayanan','created_at' => '2022-07-17 05:06:22','updated_at' => '2022-07-17 05:06:22'),
            array('id' => '5','position' => 'Kasi Kesejahteraan','created_at' => '2022-07-17 05:06:22','updated_at' => '2022-07-17 05:06:22'),
            array('id' => '6','position' => 'Kaur Keuangan','created_at' => '2022-07-17 05:06:22','updated_at' => '2022-07-17 05:06:22'),
            array('id' => '7','position' => 'Kaur Perencanaan','created_at' => '2022-07-17 05:06:22','updated_at' => '2022-07-17 05:06:22'),
            array('id' => '8','position' => 'Kaur Umum','created_at' => '2022-07-17 05:06:22','updated_at' => '2022-07-17 05:06:22'),
            array('id' => '9','position' => 'Kaur Dajah','created_at' => '2022-07-17 05:06:22','updated_at' => '2022-07-17 05:06:22'),
            array('id' => '10','position' => 'Kaur tenga','created_at' => '2022-07-17 05:06:22','updated_at' => '2022-07-17 05:06:22'),
            array('id' => '11','position' => 'Kaur Laok','created_at' => '2022-07-17 05:06:22','updated_at' => '2022-07-17 05:06:22')
          );

          ApparatusPosition::insert($apparatus_positions);

    }
}
