<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'name' => 'Caramel Coffee with Chocolate',
            'price' => 59.9,
            'category_id' => 1,
            'image' => "cafe_01.jpg",
            'description' => 'A rich caramel-infused coffee blended with premium chocolate for a sweet and indulgent experience.',
            'available' => true,
        ]);

        Product::create([
            'name' => 'Large Iced Coffee with Chocolate',
            'price' => 49.9,
            'category_id' => 1,
            'image' => "cafe_02.jpg",
            'description' => 'Refreshing cold brew coffee with chocolate syrup, perfect for hot days.',
            'available' => true,
        ]);

        Product::create([
            'name' => 'Large Iced Latte with Chocolate',
            'price' => 54.9,
            'category_id' => 1,
            'image' => "cafe_03.jpg",
            'description' => 'Smooth iced latte with a generous swirl of chocolate for a creamy, decadent treat.',
            'available' => true,
        ]);

        Product::create([
            'name' => 'Large Iced Latte with Chocolate',
            'price' => 54.9,
            'category_id' => 1,
            'image' => "cafe_04.jpg",
            'description' => 'Double chocolate iced latte with extra creamy milk for maximum indulgence.',
            'available' => true,
        ]);

        Product::create([
            'name' => 'Large Chocolate Milkshake',
            'price' => 54.9,
            'category_id' => 1,
            'image' => "cafe_05.jpg",
            'description' => 'Thick and creamy chocolate milkshake made with premium ice cream and chocolate syrup.',
            'available' => true,
        ]);

        Product::create([
            'name' => 'Small Hot Mocha Coffee',
            'price' => 39.9,
            'category_id' => 1,
            'image' => "cafe_06.jpg",
            'description' => 'Perfectly balanced small mocha with rich espresso and chocolate flavors.',
            'available' => true,
        ]);

        Product::create([
            'name' => 'Large Hot Mocha Coffee with Chocolate',
            'price' => 59.9,
            'category_id' => 1,
            'image' => "cafe_07.jpg",
            'description' => 'Extra-large mocha with double chocolate and whipped cream topping.',
            'available' => true,
        ]);

        Product::create([
            'name' => 'Large Hot Cappuccino',
            'price' => 59.9,
            'category_id' => 1,
            'image' => "cafe_08.jpg",
            'description' => 'Classic cappuccino with velvety foam and rich espresso aroma.',
            'available' => true,
        ]);

        Product::create([
            'name' => 'Medium Hot Mocha Coffee',
            'price' => 49.9,
            'category_id' => 1,
            'image' => "cafe_09.jpg",
            'description' => 'Medium-sized mocha with the perfect blend of coffee and chocolate.',
            'available' => true,
        ]);

        Product::create([
            'name' => 'Medium Iced Mocha with Caramel',
            'price' => 49.9,
            'category_id' => 1,
            'image' => "cafe_10.jpg",
            'description' => 'Chilled mocha coffee with caramel drizzle and whipped cream.',
            'available' => true,
        ]);

        Product::create([
            'name' => 'Medium Iced Mocha with Chocolate',
            'price' => 49.9,
            'category_id' => 1,
            'image' => "cafe_11.jpg",
            'description' => 'Rich chocolate iced mocha with a double shot of espresso.',
            'available' => true,
        ]);

        Product::create([
            'name' => 'Espresso Coffee',
            'price' => 29.9,
            'category_id' => 1,
            'image' => "cafe_12.jpg",
            'description' => 'Strong and aromatic single shot of premium espresso.',
            'available' => true,
        ]);

        Product::create([
            'name' => 'Large Caramel Cappuccino',
            'price' => 59.9,
            'category_id' => 1,
            'image' => "cafe_13.jpg",
            'description' => 'Fluffy cappuccino with caramel syrup and caramelized topping.',
            'available' => true,
        ]);

        Product::create([
            'name' => 'Large Caramel Coffee',
            'price' => 59.9,
            'category_id' => 1,
            'image' => "cafe_14.jpg",
            'description' => 'Bold coffee with rich caramel flavor and creamy finish.',
            'available' => true,
        ]);

        Product::create([
            'name' => 'Pack of 3 Chocolate Donuts',
            'price' => 39.9,
            'category_id' => 4,
            'image' => "donas_01.jpg",
            'description' => 'Three fluffy donuts covered in rich chocolate glaze.',
            'available' => true,
        ]);

        Product::create([
            'name' => 'Pack of 3 Glazed Donuts',
            'price' => 39.9,
            'category_id' => 4,
            'image' => "donas_02.jpg",
            'description' => 'Classic donuts with sweet sugar glaze, perfect for sharing.',
            'available' => true,
        ]);

        Product::create([
            'name' => 'Strawberry Donut',
            'price' => 19.9,
            'category_id' => 4,
            'image' => "donas_03.jpg",
            'description' => 'Soft donut with strawberry frosting and sprinkles.',
            'available' => true,
        ]);

        Product::create([
            'name' => 'Donut with Chocolate Cookie',
            'price' => 19.9,
            'category_id' => 4,
            'image' => "donas_04.jpg",
            'description' => 'Crunchy chocolate cookie topping on a classic donut.',
            'available' => true,
        ]);

        Product::create([
            'name' => 'Glazed Donut with Strawberry Sprinkles',
            'price' => 19.9,
            'category_id' => 4,
            'image' => "donas_05.jpg",
            'description' => 'Sugar-glazed donut with colorful strawberry-flavored sprinkles.',
            'available' => true,
        ]);

        Product::create([
            'name' => 'Chocolate Glazed Donut',
            'price' => 19.9,
            'category_id' => 4,
            'image' => "donas_06.jpg",
            'description' => 'Classic donut dipped in smooth chocolate glaze.',
            'available' => true,
        ]);

        Product::create([
            'name' => 'Chocolate Donut with EXTRA Chocolate',
            'price' => 19.9,
            'category_id' => 4,
            'image' => "donas_07.jpg",
            'description' => 'Chocolate lover\'s dream - chocolate donut with double chocolate topping.',
            'available' => true,
        ]);

        Product::create([
            'name' => 'Pack of 3 Chocolate Donuts',
            'price' => 39.9,
            'category_id' => 4,
            'image' => "donas_08.jpg",
            'description' => 'Three premium chocolate donuts with different toppings.',
            'available' => true,
        ]);

        Product::create([
            'name' => 'Pack of 3 Donuts with Vanilla and Chocolate',
            'price' => 39.9,
            'category_id' => 4,
            'image' => "donas_09.jpg",
            'description' => 'Variety pack with vanilla and chocolate glazed donuts.',
            'available' => true,
        ]);

        Product::create([
            'name' => 'Pack of 6 Donuts',
            'price' => 69.9,
            'category_id' => 4,
            'image' => "donas_10.jpg",
            'description' => 'Half dozen of our most popular donut varieties.',
            'available' => true,
        ]);

        Product::create([
            'name' => 'Pack of 3 Assorted Donuts',
            'price' => 39.9,
            'category_id' => 4,
            'image' => "donas_11.jpg",
            'description' => 'Three different donut flavors for variety lovers.',
            'available' => true,
        ]);

        Product::create([
            'name' => 'Natural Donut with Chocolate',
            'price' => 19.9,
            'category_id' => 4,
            'image' => "donas_12.jpg",
            'description' => 'Simple donut with light chocolate drizzle.',
            'available' => true,
        ]);

        Product::create([
            'name' => 'Pack of 3 Chocolate Donuts with Sprinkles',
            'price' => 39.9,
            'category_id' => 4,
            'image' => "donas_13.jpg",
            'description' => 'Chocolate donuts covered with colorful sprinkles.',
            'available' => true,
        ]);

        Product::create([
            'name' => 'Chocolate Coconut Donut',
            'price' => 19.9,
            'category_id' => 4,
            'image' => "donas_14.jpg",
            'description' => 'Tropical twist - chocolate donut with shredded coconut topping.',
            'available' => true,
        ]);

        Product::create([
            'name' => 'Chocolate Cookies Pack',
            'price' => 29.9,
            'category_id' => 6,
            'image' => "galletas_01.jpg",
            'description' => 'Crispy chocolate cookies in a convenient pack.',
            'available' => true,
        ]);

        Product::create([
            'name' => 'Chocolate and Oatmeal Cookies Pack',
            'price' => 39.9,
            'category_id' => 6,
            'image' => "galletas_02.jpg",
            'description' => 'Healthy oatmeal combined with rich chocolate chips.',
            'available' => true,
        ]);

        Product::create([
            'name' => 'Vanilla Muffins Pack',
            'price' => 39.9,
            'category_id' => 6,
            'image' => "galletas_03.jpg",
            'description' => 'Soft vanilla muffins with delicate crumb texture.',
            'available' => true,
        ]);

        Product::create([
            'name' => 'Pack of 4 Oatmeal Cookies',
            'price' => 24.9,
            'category_id' => 6,
            'image' => "galletas_04.jpg",
            'description' => 'Four large oatmeal cookies with raisins.',
            'available' => true,
        ]);

        Product::create([
            'name' => 'Assorted Butter Cookies',
            'price' => 39.9,
            'category_id' => 6,
            'image' => "galletas_05.jpg",
            'description' => 'Variety of buttery cookies in different shapes.',
            'available' => true,
        ]);

        Product::create([
            'name' => 'Fruit Flavored Cookies',
            'price' => 39.9,
            'category_id' => 6,
            'image' => "galletas_06.jpg",
            'description' => 'Colorful cookies with natural fruit flavors.',
            'available' => true,
        ]);

        Product::create([
            'name' => 'Classic Burger',
            'price' => 59.9,
            'category_id' => 2,
            'image' => "hamburguesas_01.jpg",
            'description' => 'Juicy beef patty with lettuce, tomato and special sauce.',
            'available' => true,
        ]);

        Product::create([
            'name' => 'Chicken Burger',
            'price' => 59.9,
            'category_id' => 2,
            'image' => "hamburguesas_02.jpg",
            'description' => 'Grilled chicken breast with fresh vegetables and mayo.',
            'available' => true,
        ]);

        Product::create([
            'name' => 'Chicken Chili Burger',
            'price' => 59.9,
            'category_id' => 2,
            'image' => "hamburguesas_03.jpg",
            'description' => 'Spicy chicken burger with chili sauce and jalapeños.',
            'available' => true,
        ]);

        Product::create([
            'name' => 'Cheese and Pickles Burger',
            'price' => 59.9,
            'category_id' => 2,
            'image' => "hamburguesas_04.jpg",
            'description' => 'Double cheese with crunchy pickles and special dressing.',
            'available' => true,
        ]);

        Product::create([
            'name' => 'Quarter Pounder Burger',
            'price' => 59.9,
            'category_id' => 2,
            'image' => "hamburguesas_05.jpg",
            'description' => 'Large 1/4 lb beef patty with all the classic toppings.',
            'available' => true,
        ]);

        Product::create([
            'name' => 'Double Cheese Burger',
            'price' => 69.9,
            'category_id' => 2,
            'image' => "hamburguesas_06.jpg",
            'description' => 'Two beef patties with double cheese and special sauce.',
            'available' => true,
        ]);

        Product::create([
            'name' => 'Special Hot Dog',
            'price' => 49.9,
            'category_id' => 2,
            'image' => "hamburguesas_07.jpg",
            'description' => 'Jumbo hot dog with onions, peppers and all the toppings.',
            'available' => true,
        ]);

        Product::create([
            'name' => 'Pack of 2 Hot Dogs',
            'price' => 69.9,
            'category_id' => 2,
            'image' => "hamburguesas_08.jpg",
            'description' => 'Two classic hot dogs with optional toppings.',
            'available' => true,
        ]);

        Product::create([
            'name' => '4 Slices of Cheese Cake',
            'price' => 69.9,
            'category_id' => 5,
            'image' => "pastel_01.jpg",
            'description' => 'Creamy New York style cheesecake slices.',
            'available' => true,
        ]);

        Product::create([
            'name' => 'Special Waffle',
            'price' => 49.9,
            'category_id' => 5,
            'image' => "pastel_02.jpg",
            'description' => 'Belgian waffle with fruit and whipped cream.',
            'available' => true,
        ]);

        Product::create([
            'name' => 'House Croissants',
            'price' => 39.9,
            'category_id' => 5,
            'image' => "pastel_03.jpg",
            'description' => 'Freshly baked buttery croissants.',
            'available' => true,
        ]);

        Product::create([
            'name' => 'Cheese Cake',
            'price' => 19.9,
            'category_id' => 5,
            'image' => "pastel_04.jpg",
            'description' => 'Single portion of our signature cheesecake.',
            'available' => true,
        ]);

        Product::create([
            'name' => 'Chocolate Cake',
            'price' => 29.9,
            'category_id' => 5,
            'image' => "pastel_05.jpg",
            'description' => 'Rich chocolate cake with fudge filling.',
            'available' => true,
        ]);

        Product::create([
            'name' => 'Slice of Chocolate Cake',
            'price' => 29.9,
            'category_id' => 5,
            'image' => "pastel_06.jpg",
            'description' => 'Generous slice of our famous chocolate cake.',
            'available' => true,
        ]);

        Product::create([
            'name' => 'Spicy Pizza with Double Cheese',
            'price' => 69.9,
            'category_id' => 3,
            'image' => "pizzas_01.jpg",
            'description' => 'Zesty pizza with spicy sauce and extra cheese.',
            'available' => true,
        ]);

        Product::create([
            'name' => 'Ham and Cheese Pizza',
            'price' => 69.9,
            'category_id' => 3,
            'image' => "pizzas_02.jpg",
            'description' => 'Classic combination of premium ham and mozzarella.',
            'available' => true,
        ]);

        Product::create([
            'name' => 'Double Cheese Pizza',
            'price' => 69.9,
            'category_id' => 3,
            'image' => "pizzas_03.jpg",
            'description' => 'For cheese lovers - double portion of mozzarella.',
            'available' => true,
        ]);

        Product::create([
            'name' => 'House Special Pizza',
            'price' => 69.9,
            'category_id' => 3,
            'image' => "pizzas_04.jpg",
            'description' => 'Our signature pizza with secret ingredient combination.',
            'available' => true,
        ]);

        Product::create([
            'name' => 'Chorizo Pizza',
            'price' => 69.9,
            'category_id' => 3,
            'image' => "pizzas_05.jpg",
            'description' => 'Spicy Spanish chorizo with bell peppers.',
            'available' => true,
        ]);

        Product::create([
            'name' => 'Hawaiian Pizza',
            'price' => 69.9,
            'category_id' => 3,
            'image' => "pizzas_06.jpg",
            'description' => 'Classic ham and pineapple combination.',
            'available' => true,
        ]);

        Product::create([
            'name' => 'Bacon Pizza',
            'price' => 69.9,
            'category_id' => 3,
            'image' => "pizzas_07.jpg",
            'description' => 'Crispy bacon pieces on cheesy pizza base.',
            'available' => true,
        ]);

        Product::create([
            'name' => 'Vegetable and Cheese Pizza',
            'price' => 69.9,
            'category_id' => 3,
            'image' => "pizzas_08.jpg",
            'description' => 'Fresh vegetables with mozzarella on thin crust.',
            'available' => true,
        ]);

        Product::create([
            'name' => 'Pepperoni and Cheese Pizza',
            'price' => 69.9,
            'category_id' => 3,
            'image' => "pizzas_09.jpg",
            'description' => 'Generous pepperoni topping with extra cheese.',
            'available' => true,
        ]);

        Product::create([
            'name' => 'Olives and Cheese Pizza',
            'price' => 69.9,
            'category_id' => 3,
            'image' => "pizzas_10.jpg",
            'description' => 'Mediterranean style with black and green olives.',
            'available' => true,
        ]);

        Product::create([
            'name' => 'Cheese, Ham and Mushroom Pizza',
            'price' => 69.9,
            'category_id' => 3,
            'image' => "pizzas_11.jpg",
            'description' => 'Three topping delight with earthy mushrooms.',
            'available' => true,
        ]);
    }
}
