<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TagArticle>
 */
class TagArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $articles = DB::table('articles')->pluck('id');
        $tags = DB::table('tags')->pluck('id');
        return [
            //
            'article_id' => $this->faker->randomElement($articles),
            'tag_id' => $this->faker->randomElement($tags)
        ];
    }
}
