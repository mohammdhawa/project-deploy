<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    public function run(): void
    {
        Movie::insert([
            [
                'name' => 'Inception',
                'description' => 'A mind-bending thriller by Christopher Nolan.',
            ],
            [
                'name' => 'The Matrix',
                'description' => 'A hacker discovers the reality is a simulation.',
            ],
            [
                'name' => 'Interstellar',
                'description' => 'A journey through space and time to save humanity.',
            ],
        ]);
    }
}
