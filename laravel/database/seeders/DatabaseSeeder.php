<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use App\Models\Reservation;
use App\Models\Table;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Kelsey',
            'email' => 'kelsey@thegourmet.com',
            'password' => 'opensesame'
        ]);
        Table::factory(5)->create();
        Reservation::factory(10)->create();

        $products = [
            [
                'category' => 'Appetizers',
                'name' => 'Dragonborn Delight',
                'price' => 15.99,
                'has_alcohol' => 0,
                'allergies' => 'Contains shellfish'
            ],
            [
                'category' => 'Appetizers',
                'name' => 'Whiterun Wheat Bread',
                'price' => 8.99,
                'has_alcohol' => 0,
                'allergies' => 'Gluten-free'
            ],
            [
                'category' => 'Appetizers',
                'name' => 'Seyda Neen Sushi Rolls',
                'price' => 18.99,
                'has_alcohol' => 0,
                'allergies' => 'Contains fish'
            ],
            [
                'category' => 'Soups',
                'name' => 'Solitude Seafood Chowder',
                'price' => 12.99,
                'has_alcohol' => 0,
                'allergies' => 'Contains dairy, shellfish'
            ],
            [
                'category' => 'Soups',
                'name' => 'Markarth Meat Stew',
                'price' => 14.99,
                'has_alcohol' => 0,
                'allergies' => 'Contains meat'
            ],
            [
                'category' => 'Soups',
                'name' => 'Winterhold Vegetable Broth',
                'price' => 10.99,
                'has_alcohol' => 0,
                'allergies' => 'Vegetarian, gluten-free'
            ],
            [
                'category' => 'Salads',
                'name' => 'Falkreath Forest Salad',
                'price' => 10.99,
                'has_alcohol' => 0,
                'allergies' => 'Vegetarian, gluten-free'
            ],
            [
                'category' => 'Salads',
                'name' => 'Riften Roasted Vegetable Salad',
                'price' => 11.99,
                'has_alcohol' => 0,
                'allergies' => 'Vegetarian, gluten-free'
            ],
            [
                'category' => 'Salads',
                'name' => 'Haafingar Horker Caesar Salad',
                'price' => 13.99,
                'has_alcohol' => 0,
                'allergies' => 'Contains meat'
            ],
            [
                'category' => 'Main Courses',
                'name' => 'Whiterun Roast Mammoth',
                'price' => 24.99,
                'has_alcohol' => 0,
                'allergies' => 'Contains meat'
            ],
            [
                'category' => 'Main Courses',
                'name' => 'Windhelm Braised Beef',
                'price' => 22.99,
                'has_alcohol' => 0,
                'allergies' => 'Contains meat'
            ],
            [
                'category' => 'Main Courses',
                'name' => 'Riverwood Grilled Salmon',
                'price' => 20.99,
                'has_alcohol' => 0,
                'allergies' => 'Contains fish'
            ],
            [
                'category' => 'Main Courses',
                'name' => 'Solstheim Spiced Rabbit',
                'price' => 21.99,
                'has_alcohol' => 0,
                'allergies' => 'Contains meat'
            ],
            [
                'category' => 'Desserts',
                'name' => 'Sweetroll Surprise',
                'price' => 9.99,
                'has_alcohol' => 0,
                'allergies' => 'Contains dairy, gluten'
            ],
            [
                'category' => 'Desserts',
                'name' => 'Haafingar Honey Cake',
                'price' => 8.99,
                'has_alcohol' => 0,
                'allergies' => 'Contains dairy, gluten'
            ],
            [
                'category' => 'Desserts',
                'name' => 'Whiterun Whipped Cream Pie',
                'price' => 11.99,
                'has_alcohol' => 0,
                'allergies' => 'Contains dairy'
            ],
            [
                'category' => 'Desserts',
                'name' => 'Falkreath Fruit Tart',
                'price' => 10.99,
                'has_alcohol' => 0,
                'allergies' => 'Contains gluten'
            ],
            [
                'category' => 'Drinks',
                'name' => 'Black-Briar Mead',
                'price' => 6.99,
                'has_alcohol' => 1,
                'allergies' => 'Alcoholic'
            ],
            [
                'category' => 'Drinks',
                'name' => 'Honningbrew Mead',
                'price' => 7.99,
                'has_alcohol' => 1,
                'allergies' => 'Alcoholic'
            ],
            [
                'category' => 'Drinks',
                'name' => 'Riften Rum Punch',
                'price' => 8.99,
                'has_alcohol' => 1,
                'allergies' => 'Alcoholic'
            ],
            [
                'category' => 'Drinks',
                'name' => 'Solitude Spiced Wine',
                'price' => 9.99,
                'has_alcohol' => 1,
                'allergies' => 'Alcoholic'
            ],
            [
                'category' => 'Drinks',
                'name' => 'Markarth Mulled Cider',
                'price' => 6.99,
                'has_alcohol' => 0,
                'allergies' => 'Non-alcoholic'
            ],
            [
                'category' => 'Drinks',
                'name' => 'Whiterun Spring Water',
                'price' => 2.99,
                'has_alcohol' => 0,
                'allergies' => 'Non-alcoholic'
            ],
        ];
        
        foreach ($products as $productData) {
            Product::factory()->create($productData);
        }  
    }
}
