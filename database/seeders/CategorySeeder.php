<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::create([
            'name' => 'coffee',
            'description' => 'freshly brewed coffee to energize your day, crafted with love and caffeine.',
            'icon' => 'icon_coffee.svg'
        ]);

        Category::create([
            'name' => 'burgers',
            'description' => 'satisfy your cravings with our juicy, mouth-watering burgers made with premium ingredients.',
            'icon' => 'icon_burgers.svg'
        ]);

        Category::create([
            'name' => 'pizzas',
            'description' => 'hot and cheesy pizzas with crispy crusts and generous toppings, baked to perfection.',
            'icon' => 'icon_pizzas.svg'
        ]);

        Category::create([
            'name' => 'donuts',
            'description' => 'soft, fluffy donuts glazed and filled with irresistible flavors for every sweet tooth.',
            'icon' => 'icon_donuts.svg'
        ]);

        Category::create([
            'name' => 'cakes',
            'description' => 'elegant and delicious cakes for any occasion — from birthdays to everyday indulgence.',
            'icon' => 'icon_cakes.svg'
        ]);

        Category::create([
            'name' => 'cookies',
            'description' => 'warm, freshly baked cookies with a perfect balance of crunch and chewiness.',
            'icon' => 'icon_cookies.svg'
        ]);
    }
}