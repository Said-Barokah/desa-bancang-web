<?php

namespace Database\Seeders;

use App\Models\Villager;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VillagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $villagers = array(
            array('id' => '1','nik' => '3529010905010004','name' => 'MAISYAROH','places_of_birth' => '4','birthday' => '2022-08-22','gender_id' => '1','blood_type_id' => '3','religion_id' => '4','marital_status_id' => '2','profession_id' => '3','nationality_id' => '2','created_at' => '2022-07-17 05:06:22','updated_at' => '2022-08-18 17:41:33'),
            array('id' => '2','nik' => '3529010905010002','name' => 'MOCH. SUED','places_of_birth' => '5','birthday' => '2022-08-09','gender_id' => '1','blood_type_id' => '3','religion_id' => '2','marital_status_id' => '3','profession_id' => '4','nationality_id' => '1','created_at' => '2022-07-17 05:06:22','updated_at' => '2022-08-18 17:42:14'),
            array('id' => '3','nik' => '3529010905010001','name' => 'MUHAMMAD YASIN','places_of_birth' => '3','birthday' => '2022-08-19','gender_id' => '1','blood_type_id' => '2','religion_id' => '3','marital_status_id' => '1','profession_id' => '3','nationality_id' => '1','created_at' => '2022-07-17 05:06:22','updated_at' => '2022-08-18 17:42:46'),
            array('id' => '4','nik' => '3529010905010007','name' => 'SITI MUSLICHAH','places_of_birth' => '6','birthday' => '2022-09-09','gender_id' => '1','blood_type_id' => '1','religion_id' => '4','marital_status_id' => '2','profession_id' => '8','nationality_id' => '1','created_at' => '2022-07-17 05:06:22','updated_at' => '2022-08-18 17:43:30'),
            array('id' => '5','nik' => '3529010905010000','name' => 'CITRA INDAH SARI','places_of_birth' => '6','birthday' => '2022-08-08','gender_id' => '1','blood_type_id' => '1','religion_id' => '3','marital_status_id' => '1','profession_id' => '3','nationality_id' => '1','created_at' => '2022-07-17 05:06:22','updated_at' => '2022-08-18 17:44:06'),
            array('id' => '6','nik' => '3529010905010009','name' => 'ABDUL. HAMID','places_of_birth' => '4','birthday' => '2022-09-02','gender_id' => '1','blood_type_id' => '3','religion_id' => '1','marital_status_id' => '1','profession_id' => '4','nationality_id' => '1','created_at' => '2022-07-17 05:06:22','updated_at' => '2022-08-18 17:44:48'),
            array('id' => '7','nik' => '3529010905010012','name' => 'KAMILIA','places_of_birth' => '9','birthday' => '2022-07-18','gender_id' => '1','blood_type_id' => '2','religion_id' => '2','marital_status_id' => '1','profession_id' => '1','nationality_id' => '1','created_at' => '2022-07-17 05:06:22','updated_at' => '2022-08-18 17:45:27'),
            array('id' => '8','nik' => '3529010905010043','name' => 'CHOIRUL ANAM','places_of_birth' => '6','birthday' => '2022-09-09','gender_id' => '1','blood_type_id' => '3','religion_id' => '4','marital_status_id' => '2','profession_id' => '1','nationality_id' => '1','created_at' => '2022-07-17 05:06:22','updated_at' => '2022-08-18 17:47:13'),
            array('id' => '9','nik' => '3529010905010098','name' => 'MUDAWWAMAH','places_of_birth' => '3','birthday' => '2022-08-26','gender_id' => '1','blood_type_id' => '1','religion_id' => '1','marital_status_id' => '1','profession_id' => '1','nationality_id' => '1','created_at' => '2022-07-17 05:06:22','updated_at' => '2022-08-18 17:47:51'),
            array('id' => '10','nik' => '3529010905010021','name' => 'RUDI SALAM','places_of_birth' => '1','birthday' => '2022-08-26','gender_id' => '1','blood_type_id' => '1','religion_id' => '1','marital_status_id' => '1','profession_id' => '1','nationality_id' => '1','created_at' => '2022-07-17 05:06:22','updated_at' => '2022-08-18 17:48:27'),
            array('id' => '11','nik' => '3529010905010034','name' => 'ERNA','places_of_birth' => '4','birthday' => '2022-08-17','gender_id' => '1','blood_type_id' => '1','religion_id' => '3','marital_status_id' => '2','profession_id' => '3','nationality_id' => '1','created_at' => '2022-07-17 05:06:22','updated_at' => '2022-08-18 17:48:57'),
            array('id' => '12','nik' => '3529010905010054','name' => 'NAIS YAM YUNIS','places_of_birth' => '15','birthday' => '2022-09-16','gender_id' => '1','blood_type_id' => '2','religion_id' => '4','marital_status_id' => '2','profession_id' => '7','nationality_id' => '1','created_at' => '2022-07-17 05:06:22','updated_at' => '2022-08-18 17:49:33'),
            array('id' => '13','nik' => '3529010905010075','name' => 'IMA HOIRIYA','places_of_birth' => '12','birthday' => '2022-08-09','gender_id' => '1','blood_type_id' => '2','religion_id' => '2','marital_status_id' => '1','profession_id' => '1','nationality_id' => '1','created_at' => '2022-07-17 05:06:22','updated_at' => '2022-08-18 17:50:14'),
            array('id' => '14','nik' => '3529010905010059','name' => 'NUR LAILI','places_of_birth' => '7','birthday' => '2022-08-04','gender_id' => '1','blood_type_id' => '3','religion_id' => '3','marital_status_id' => '1','profession_id' => '1','nationality_id' => '1','created_at' => '2022-07-17 05:06:22','updated_at' => '2022-08-18 17:50:50'),
            array('id' => '15','nik' => '3529010905010062','name' => 'IMAM SYAFI\'I','places_of_birth' => '7','birthday' => '2022-08-10','gender_id' => '1','blood_type_id' => '2','religion_id' => '2','marital_status_id' => '1','profession_id' => '1','nationality_id' => '1','created_at' => '2022-07-17 05:06:22','updated_at' => '2022-08-18 17:51:25'),
            array('id' => '16','nik' => '3529010905010044','name' => 'LISNIAWATI','places_of_birth' => '1','birthday' => '2022-08-19','gender_id' => '1','blood_type_id' => '1','religion_id' => '1','marital_status_id' => '1','profession_id' => '1','nationality_id' => '1','created_at' => '2022-07-17 05:06:22','updated_at' => '2022-08-18 17:52:02'),
            array('id' => '17','nik' => '3529010905010003','name' => 'MOH. SA\'ID','places_of_birth' => '4','birthday' => '2022-08-23','gender_id' => '2','blood_type_id' => '4','religion_id' => '1','marital_status_id' => '2','profession_id' => '2','nationality_id' => '1','created_at' => '2022-08-18 15:45:47','updated_at' => '2022-08-18 15:45:47')
          );

          Villager::insert($villagers);

    }
}
