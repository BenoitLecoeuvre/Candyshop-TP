<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->faker = Faker::create();
        $name = Str::random(5);
        $catname = Str::random(5);

        DB::table('products')->insert([
            'name' => $name,
            'description' => Str::random(20),
            'prix' => rand(1, 20),
            'slug' => Str::slug($name),
            'coup_de_coeur' => (bool) rand(0, 1),
            'image' => $this->faker->imageUrl(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categories')->insert([
            'name' => $catname ,
            'slug' => Str::slug($catname),
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
