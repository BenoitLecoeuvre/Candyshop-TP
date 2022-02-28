<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => Str::random(),
            'description' => Str::random(),
            'prix' => rand(1, 20),
            'slug' => Str::random(),
            'coup_de_coeur' => (bool) rand(0, 1),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
