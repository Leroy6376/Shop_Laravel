<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Color;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Storage::delete(Storage::allFiles('public/images'));

        $categories = [
            [
                'title' => 'Household',
                'parent_id' => null,
                'level' => 0
            ],
            [
                'title' => 'Garden',
                'parent_id' => null,
                'level' => 0
            ],
            [
                'title' => 'Network',
                'parent_id' => null,
                'level' => 0
            ],
            [
                'title' => 'Smartphones',
                'parent_id' => null,
                'level' => 0
            ],
            [
                'title' => 'PCs & laptops',
                'parent_id' => null,
                'level' => 0
            ],
            [
                'title' => 'Components',
                'parent_id' => null,
                'level' => 0
            ],
            [
                'title' => 'Accessories',
                'parent_id' => null,
                'level' => 0
            ],
            [
                'title' => 'Office',
                'parent_id' => null,
                'level' => 0
            ],
            [
                'title' => 'Built-in appliances',
                'parent_id' => 1,
                'level' => 1
            ],
            [
                'title' => 'Kitchen appliances',
                'parent_id' => 1,
                'level' => 1
            ],
            [
                'title' => 'Home appliances',
                'parent_id' => 1,
                'level' => 1
            ],
            [
                'title' => 'WI-FI routers',
                'parent_id' => 3,
                'level' => 1
            ],
            [
                'title' => 'Protection and power supplies',
                'parent_id' => 3,
                'level' => 1
            ],
            [
                'title' => 'Video surveillance',
                'parent_id' => 3,
                'level' => 1
            ],
            [
                'title' => 'Smartphones and gadgets',
                'parent_id' => 4,
                'level' => 1
            ],
            [
                'title' => 'Tablets',
                'parent_id' => 4,
                'level' => 1
            ],
            [
                'title' => 'Computers and Software',
                'parent_id' => 5,
                'level' => 1
            ],
            [
                'title' => 'Laptops and Accessories',
                'parent_id' => 5,
                'level' => 1
            ],
            [
                'title' => 'Main components',
                'parent_id' => 6,
                'level' => 1
            ],
            [
                'title' => 'Expansion devices',
                'parent_id' => 6,
                'level' => 1
            ],
            [
                'title' => 'For mobile devices',
                'parent_id' => 7,
                'level' => 1
            ],
            [
                'title' => 'For computers and laptops',
                'parent_id' => 7,
                'level' => 1
            ],
            [
                'title' => 'Consumables',
                'parent_id' => 8,
                'level' => 1
            ],
            [
                'title' => 'Printing equipment',
                'parent_id' => 8,
                'level' => 1
            ],
        ];

        $colors = [
            [
                'title' => 'Red'
            ],
            [
                'title' => 'Grey'
            ],
            [
                'title' => 'Light blue'
            ],
            [
                'title' => 'Dark blue'
            ],
            [
                'title' => 'Green'
            ],
            [
                'title' => 'Yellow'
            ],
            [
                'title' => 'Pink'
            ],
            [
                'title' => 'Orange'
            ],
            [
                'title' => 'Brown'
            ],
            [
                'title' => 'White'
            ],
            [
                'title' => 'Black'
            ],
            [
                'title' => 'Violet'
            ],
            [
                'title' => 'Gold'
            ],
            [
                'title' => 'Silver'
            ],
            [
                'title' => 'Bronze'
            ],

        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
        foreach ($colors as $color) {
            Color::create($color);
        }
    }
}
