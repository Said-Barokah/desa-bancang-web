<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\VillageApparatusStructure;
class VillageApparatusStructureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $village_apparatus_structures = array(
            array('id' => '1','photo_path' => '/storage/images/profil/dNQYmgZdNO2w1fHXIn0ft7OohRe8Byw0ZKYeFSv0.jpg','apparatus_id' => '1','position_id' => '1','from_year' => '2017','to_year' => '2022','created_at' => '2022-07-17 05:06:22','updated_at' => '2022-08-02 03:53:50'),
            array('id' => '2','photo_path' => '/storage/images/profil/CWQCW5KIEeFyRprFoW1hctWvtKOaFJZRiYi6DMTQ.png','apparatus_id' => '2','position_id' => '2','from_year' => '2017','to_year' => '2022','created_at' => '2022-07-17 05:06:22','updated_at' => '2022-08-02 03:54:12'),
            array('id' => '3','photo_path' => NULL,'apparatus_id' => '3','position_id' => '3','from_year' => '2017','to_year' => '2022','created_at' => '2022-07-17 05:06:22','updated_at' => '2022-07-17 05:06:22'),
            array('id' => '4','photo_path' => NULL,'apparatus_id' => '4','position_id' => '4','from_year' => '2017','to_year' => '2022','created_at' => '2022-07-17 05:06:22','updated_at' => '2022-07-17 05:06:22'),
            array('id' => '5','photo_path' => NULL,'apparatus_id' => '5','position_id' => '5','from_year' => '2017','to_year' => '2022','created_at' => '2022-07-17 05:06:22','updated_at' => '2022-07-17 05:06:22'),
            array('id' => '6','photo_path' => NULL,'apparatus_id' => '6','position_id' => '6','from_year' => '2017','to_year' => '2022','created_at' => '2022-07-17 05:06:22','updated_at' => '2022-07-17 05:06:22'),
            array('id' => '7','photo_path' => NULL,'apparatus_id' => '7','position_id' => '7','from_year' => '2017','to_year' => '2022','created_at' => '2022-07-17 05:06:22','updated_at' => '2022-07-17 05:06:22'),
            array('id' => '8','photo_path' => NULL,'apparatus_id' => '8','position_id' => '8','from_year' => '2017','to_year' => '2022','created_at' => '2022-07-17 05:06:22','updated_at' => '2022-07-17 05:06:22'),
            array('id' => '9','photo_path' => NULL,'apparatus_id' => '9','position_id' => '9','from_year' => '2017','to_year' => '2022','created_at' => '2022-07-17 05:06:22','updated_at' => '2022-07-17 05:06:22'),
            array('id' => '10','photo_path' => NULL,'apparatus_id' => '10','position_id' => '10','from_year' => '2017','to_year' => '2022','created_at' => '2022-07-17 05:06:22','updated_at' => '2022-07-17 05:06:22'),
            array('id' => '11','photo_path' => NULL,'apparatus_id' => '11','position_id' => '11','from_year' => '2017','to_year' => '2022','created_at' => '2022-07-17 05:06:22','updated_at' => '2022-07-17 05:06:22')
          );

          VillageApparatusStructure::insert($village_apparatus_structures);
    }
}
