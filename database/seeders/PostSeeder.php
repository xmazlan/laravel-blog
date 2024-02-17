<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Post::factory()
            ->create([
                'user_id' => 1, // Ahmad Mazlan
                'title' => 'Post Pertama',
                'slug' => 'post-pertama',
                'content' => 'Ini adalah post pertama saya'
            ]);

        \App\Models\Post::factory()
            ->count(10)
            ->create();
    }
}
