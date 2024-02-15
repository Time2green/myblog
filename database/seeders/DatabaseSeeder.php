<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\Post::factory(50)->create();
         \App\Models\Tag::factory(10)->create();
         DB::table('post_tag')->insert([
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
             ['post_id' => fake()->numberBetween(1, 50), 'tag_id' => fake()->numberBetween(1, 10)],
         ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
