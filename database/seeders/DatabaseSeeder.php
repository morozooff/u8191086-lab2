<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Tag;
use App\Models\TagArticle;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
        User::factory(100)->create();
        Article::factory(100)->create();
        Tag::factory(100)->create();
        TagArticle::factory(100)->create();
    }
}
