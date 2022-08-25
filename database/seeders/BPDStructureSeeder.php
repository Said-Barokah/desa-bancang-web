<?php

namespace Database\Seeders;

use App\Models\BPDStructure;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BPDStructureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $b_p_d_structures = array(
            array('id' => '1','photo_path' => '/storage/images/profil/6UpF7bw5GOUgdKyIbfJMTTVx6FooAuvX2sdX25Gy.png','manager_id' => '12','position_id' => '1','from_year' => '2017','to_year' => '2022','created_at' => '2022-07-17 05:06:22','updated_at' => '2022-08-07 14:08:31'),
            array('id' => '2','photo_path' => NULL,'manager_id' => '13','position_id' => '2','from_year' => '2017','to_year' => '2022','created_at' => '2022-07-17 05:06:22','updated_at' => '2022-07-17 05:06:22'),
            array('id' => '3','photo_path' => NULL,'manager_id' => '14','position_id' => '3','from_year' => '2017','to_year' => '2022','created_at' => '2022-07-17 05:06:22','updated_at' => '2022-07-17 05:06:22'),
            array('id' => '4','photo_path' => NULL,'manager_id' => '15','position_id' => '4','from_year' => '2017','to_year' => '2022','created_at' => '2022-07-17 05:06:22','updated_at' => '2022-07-18 16:03:55'),
            array('id' => '5','photo_path' => NULL,'manager_id' => '16','position_id' => '4','from_year' => '2017','to_year' => '2022','created_at' => '2022-07-17 05:06:22','updated_at' => '2022-07-17 05:06:22'),
            array('id' => '10','photo_path' => '/storage/images/profil/yKQhVPDCIaB7qZp52mHuYPp55OGOkkJQAyRzDjXC.png','manager_id' => '3','position_id' => '2','from_year' => '2020','to_year' => '2020','created_at' => '2022-08-15 08:38:10','updated_at' => '2022-08-15 08:38:10')
          );

          BPDStructure::insert($b_p_d_structures);
    }
}
