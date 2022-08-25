<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = array(
            array('id' => '1','name' => 'Lokal','slug' => 'lokal','keywords' => 'lokal, desa bancang, desa','meta_desc' => 'berita ini hanya memuat tentang desa bancang','created_at' => '2022-07-19 14:24:25','updated_at' => '2022-07-19 14:24:25'),
            array('id' => '2','name' => 'Nasional','slug' => 'nasional','keywords' => 'indonesia, nasional, negara','meta_desc' => 'berita ini berisi semua yang berhubungan dengan negara Indonesia','created_at' => '2022-07-19 14:25:46','updated_at' => '2022-07-19 14:25:46'),
            array('id' => '3','name' => 'Kesehatan','slug' => 'kesehatan','keywords' => 'sehat, posyandu, puskesmas, sakit','meta_desc' => 'Berita ini berisikan tentang kesehatan dan segala aspek yang berhubungan tentang kesehatan','created_at' => '2022-07-19 14:27:10','updated_at' => '2022-07-19 14:27:10'),
            array('id' => '4','name' => 'Sumber Daya Alam','slug' => 'sumber-daya-alam','keywords' => 'pertanian, perkebunan, sdm','meta_desc' => 'Berita ini  berkaitan dengan sumber daya alam terutama pada Desa Bancang','created_at' => '2022-07-19 14:29:45','updated_at' => '2022-07-19 14:29:45'),
            array('id' => '5','name' => 'Kriminalitas','slug' => 'kriminalitas','keywords' => 'pembunuhan, kriminal, begal, pencurian','meta_desc' => 'Berita ini mencakup semua yang berkaitan dengan kriminalitas terutama yang ada di Desa Bancang','created_at' => '2022-07-19 14:30:57','updated_at' => '2022-07-19 14:47:29'),
            array('id' => '6','name' => 'Sumber Daya Manusia','slug' => 'sumber-daya-manusia','keywords' => 'sdm, masyarakat, desa','meta_desc' => 'Berita ini berkaitan dengan Sumber daya manusia terutama yang berada di Desa Bancang','created_at' => '2022-07-19 14:32:28','updated_at' => '2022-07-19 14:32:28')
          );
        Category::insert($categories);
    }
}
