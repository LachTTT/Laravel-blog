<?php

namespace Database\Seeders;

use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Category::create([
        //     'name' => 'Web Design',
        //     'slug' => 'web-design'
        // ]);

        // Post::create([
        //     'title' => 'Judul artikel 1',
        //     'author_id' => 1,
        //     'category_id' => 1,
        //     'slug' => 'judul-artikel-1',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quibusdam, ab libero dignissimos alias facere numquam reiciendis perferendis dolorum perspiciatis provident placeat sint deserunt veniam fugiat et, officiis facilis eius?'
        // ]);
        
        $this->call([CategorySeeder::class,UserSeeder::class]);
        Post::factory(100)->recycle([
            Category::all(),
            User::all()

        ])->create();
    }
}
