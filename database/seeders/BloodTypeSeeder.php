<?php

namespace Database\Seeders;

use App\Models\BloodType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BloodTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blood_types = array(
            array('id' => '1','name' => 'A'),
            array('id' => '2','name' => 'B'),
            array('id' => '3','name' => 'O'),
            array('id' => '4','name' => 'AB')
          );

        BloodType::insert($blood_types);
    }
}
