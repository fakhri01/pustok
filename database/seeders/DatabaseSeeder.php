<?php

namespace Database\Seeders;

use App\Models\Product;
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

        if (!User::exists()) {
            User::factory()->create([
                'name' => 'Test User',
                'email' => 'test@example.com',
            ]);
        }

        if (!Slider::exists()) {
            Slider::factory()->create([
                'title' => 'test title',
                'sub_title' => 'test sub title',
                'description' => 'test description',
                'bg_url' => 'test.png',
                'link_url' => 'test.com',
            ]);
        }
        if (!Product::exists()) {
            Product::factory()->create([
                'author_id' => 1,
                'category_id' => 1,
                'tag_id' => 1,
                'title' => 'Beats EP Wired On-Ear Headphone-Black',
                'description' => 'Long printed dress with thin adjustable straps. V-neckline and wiring under the Dust with ruffles at the bottom of the dress.',
                'price' => 199.99,
                'img_url' => 'client/assets/image/products/product-1.jpg',
                'stock' => 100,
                'slug'=> 'beats-ep-wired-on-ear-headphone-black',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
