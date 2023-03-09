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

        $output = new \Symfony\Component\Console\Output\ConsoleOutput();

        \App\Models\User::factory()->create([
            'name' => 'Matteo',
            'email' => 'matteo.dante659@gmail.com',
        ]);

        \App\Models\User::factory(10)->create();

        $output->writeln("<info>Users creati</info>");

        \App\Models\Hashtag::factory(100)->create();

        $output->writeln("<info>Hashtag creati</info>");

        \App\Models\Post::factory(1000)->create();

        $output->writeln("<info>Post creati</info>");
    }
}
