<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Cog\Contracts\Love\ReactionType\Models\ReactionType;
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

        \App\Models\User::factory()->create([
            'name' => 'Matteo',
            'email' => 'matteo.dante659@gmail.com',
        ]);

        \App\Models\User::factory(10)->create();

        \App\Models\Hashtag::factory(10)->create();

        \App\Models\Post::factory(100)->create();
    }
}
