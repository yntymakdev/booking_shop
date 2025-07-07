<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
public function run(): void
{
    $categories = [
        'Technology',
        'Knowledges',
        'Books',
        'Sports',   
        'Strong',
    ];
   \App\Models\Category::factory()->count(5)->create();

    \App\Models\Post::factory(100)->create();
    foreach ($categories as $category) {
        Category::create(['name' => $category]);
    }

    Post::factory(100)->create();
}

}