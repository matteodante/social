<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use App\Models\Post;
use App\Models\User;

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
            'media_type' => $this->faker->randomElement(['image', 'video', 'audio', 'document']),
            'media_url' => $this->faker->imageUrl(),
            'media_thumbnail_url' => $this->faker->imageUrl(),
            'location_lat' => $this->faker->latitude(),
            'location_lng' => $this->faker->longitude(),
            'location_name' => $this->faker->address(),
            'language' => $this->faker->languageCode(),
            'sentiment' => $this->faker->randomElement(['positive', 'negative', 'neutral', 'mixed']),
            'is_pinned' => $this->faker->boolean(10),
            'is_deleted' => $this->faker->boolean(5),
            'is_edited' => $this->faker->boolean(10),
            'is_sensitive' => $this->faker->boolean(10),
            'likes_count' => $this->faker->numberBetween(0, 100),
            'retweets_count' => $this->faker->numberBetween(0, 100),
            'comments_count' => $this->faker->numberBetween(0, 100),
        ];
    }
}
