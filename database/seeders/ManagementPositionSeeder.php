<?php

namespace Database\Seeders;

use App\Models\ManagementPosition;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ManagementPositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $management_positions = array(
            array('id' => '1','position' => 'Ketua Pengurus','created_at' => '2022-07-17 05:06:22','updated_at' => '2022-07-17 05:06:22'),
            array('id' => '2','position' => 'Wakil Pengurus','created_at' => '2022-07-17 05:06:22','updated_at' => '2022-07-17 05:06:22'),
            array('id' => '3','position' => 'Sekretaris Pengurus','created_at' => '2022-07-17 05:06:22','updated_at' => '2022-07-17 05:06:22'),
            array('id' => '4','position' => 'Anggota','created_at' => '2022-07-17 05:06:22','updated_at' => '2022-07-17 05:06:22')
          );
        ManagementPosition::insert($management_positions);
    }
}
