<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = array(
            array('id' => '1','name' => 'desa bancang','slug' => 'desa-bancang','keywords' => 'desa, bancang, masyarakat bancang','meta_desc' => 'Berita ini akan berisi yang berkaitan dengan desa bancang','created_at' => '2022-07-19 14:49:30','updated_at' => '2022-07-19 14:49:30'),
            array('id' => '2','name' => 'korupsi','slug' => 'korupsi','keywords' => 'korupsi','meta_desc' => 'Berita ini akan berisi yang berkaitan dengan korupsi','created_at' => '2022-07-19 14:50:40','updated_at' => '2022-07-19 14:50:40'),
            array('id' => '3','name' => 'narkoba','slug' => 'narkoba','keywords' => 'narkoba','meta_desc' => 'Berita ini akan berisi yang berkaitan dengan narkoba','created_at' => '2022-07-19 14:50:56','updated_at' => '2022-07-19 14:50:56'),
            array('id' => '4','name' => 'kkn','slug' => 'kkn','keywords' => 'kkn','meta_desc' => 'Berita ini akan berisi yang berkaitan dengan kkn','created_at' => '2022-07-19 14:51:47','updated_at' => '2022-07-19 14:51:47'),
            array('id' => '5','name' => 'viral','slug' => 'viral','keywords' => 'viral','meta_desc' => 'Berita ini akan berisi yang berkaitan dengan berita yang lagi viral','created_at' => '2022-07-19 14:52:54','updated_at' => '2022-07-19 14:52:54'),
            array('id' => '6','name' => 'berbagi','slug' => 'berbagi','keywords' => 'berbagi, sedekah, berbagi','meta_desc' => 'Berita ini akan berisi yang berkaitan dengan hal yang bertemakan kesosialan','created_at' => '2022-07-19 14:54:31','updated_at' => '2022-07-19 14:54:31'),
            array('id' => '7','name' => 'indonesia maju','slug' => 'indonesia-maju','keywords' => 'indonesia maju','meta_desc' => 'Berita ini akan berisi yang berkaitan dengan perkembangan indonesia','created_at' => '2022-07-19 14:55:33','updated_at' => '2022-07-19 14:55:33')
          );

        Tag::insert($tags);
    }
}
