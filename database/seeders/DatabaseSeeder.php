<?php

namespace Database\Seeders;

use App\Models\Slider;
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
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Slider::factory()->create([
            'title' => 'test title',
            'sub_title' => 'test sub title',
            'description' => 'test description',
            'bg_url' => 'test.png',
            'link_url' => 'test.com',
        ]);
    }
}
