<?php

namespace Database\Seeders;

use App\Models\Gender;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genders = array(
            array('id' => '1','name' => 'LAKI-LAKI'),
            array('id' => '2','name' => 'PEREMPUAN')
          );
        Gender::insert($genders);
    }
}
