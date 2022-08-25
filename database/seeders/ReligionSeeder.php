<?php

namespace Database\Seeders;

use App\Models\Religion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReligionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $religions = array(
            array('id' => '1','name' => 'Islam'),
            array('id' => '2','name' => 'Kristen Protestan'),
            array('id' => '3','name' => 'Katolik'),
            array('id' => '4','name' => 'Hindu'),
            array('id' => '5','name' => 'Buddha'),
            array('id' => '6','name' => 'Konghucu')
          );
        Religion::insert($religions);
    }
}
