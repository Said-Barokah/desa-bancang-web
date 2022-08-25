<?php

namespace Database\Seeders;

use App\Models\Nationality;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NationalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nationalities = array(
            array('id' => '1','name' => 'WNI'),
            array('id' => '2','name' => 'WNA'),
          );
        Nationality::insert($nationalities);
    }
}
