<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Gender;
use App\Models\PostTag;
use App\Models\Religion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\PostSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ApparatusPositionSeeder::class);
        $this->call(ManagementPositionSeeder::class);
        $this->call(BloodTypeSeeder::class);
        $this->call(ProvincesSeeder::class);
        $this->call(CitiesSeeder::class);
        $this->call(GenderSeeder::class);
        $this->call(MaritalStatusSeeder::class);
        $this->call(ProfessionSeeder::class);
        $this->call(ReligionSeeder::class);
        $this->call(NationalitySeeder::class);
        $this->call(VillagerSeeder::class);
        $this->call(VillageApparatusStructureSeeder::class);
        $this->call(BPDStructureSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(TagSeeder::class);
        $this->call(PostSeeder::class);
        // $this->call(PostSeeder::class):
        // Post::factory(150)->create();
        // Category::factory(15)->create();
    }
}
