<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use App\Models\Post;
use App\Models\User;
use App\Models\Hashtag;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Posts>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $user = User::inRandomOrder()->first();

        return [
            'user_id' => $user->id,
            'content' => $this->faker->realText(300),
            'media_type' => $this->faker->randomElement(['image', 'video', 'audio', 'sale']),
            'media_url' => $this->faker->imageUrl(),
            'media_thumbnail_url' => $this->faker->imageUrl(),
            'location_lat' => $this->faker->latitude(),
            'location_lng' => $this->faker->longitude(),
            'location_name' => $this->faker->address(),
            'language' => $this->faker->languageCode(),
            'sentiment' => $this->faker->randomElement(['positive', 'negative', 'neutral', 'mixed']),
            'is_pinned' => false,
            'is_deleted' => false,
            'is_edited' => false,
            'is_sensitive' => false,
            'retweets_count' => 0,
            'comments_count' => 0,
            'views_count' => 0,
            'shares_count' => 0,
            'tags' => $this->faker->words(5, true),
            'mentions' => $this->faker->name(),
            'published_at' => $this->faker->dateTime(),
            'expire_at' => $this->faker->dateTime(),
            'is_featured' => false,
            'is_promoted' => false,
            'score' => $this->faker->randomFloat(4, 0, 1),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }


    public function configure()
    {

        return $this->afterCreating(function (Post $post) {
            $post->hashtags()->attach(Hashtag::inRandomOrder()->take(rand(0, 3))->get());
            foreach (User::inRandomOrder()->take(rand(0, 10))->get() as $user) {
                $facade = $user->viaLoveReacter();
                $facade->reactTo($post, 'Like');
            }
        });
    }
}
