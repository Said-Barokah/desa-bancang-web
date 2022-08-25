<?php

namespace Database\Seeders;

use App\Models\MaritalStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaritalStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $marital_statuses = array(
            array('id' => '1','name' => 'Belum Kawin'),
            array('id' => '2','name' => 'Kawin'),
            array('id' => '3','name' => 'Cerai Mati'),
            array('id' => '4','name' => 'Cerai Hidup')
          );
        MaritalStatus::insert($marital_statuses);
    }
}
