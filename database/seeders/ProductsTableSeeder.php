<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [ 'id' => 1, 'category' => 1, 'name' =>  'Shrimp brochette', 'image' => 'menu-1.jpg', 'description' => 'Ipsum ipsum clita erat amet dolor justo
            diam', 'thumbnail' => '', 'price' => '2000',  'discount' => ''],
            [ 'id' => 2, 'category' => 1, 'name' =>  'Cantina', 'image' => 'menu-2.jpg', 'description' => 'Ipsum ipsum clita erat amet dolor justo
                                            diam', 'thumbnail' => '', 'price' => '1300',  'discount' => ''],
            [ 'id' => 3, 'category' => 1, 'name' =>  'Strip', 'image' => 'menu-3.jpg', 'description' => 'Ipsum ipsum clita erat amet dolor justo
                                            diam', 'thumbnail' => '', 'price' => '1500',  'discount' => ''],
            [ 'id' => 4, 'category' => 1, 'name' =>  'Cheese Chilli', 'image' => 'menu-4.jpg', 'description' => 'Ipsum ipsum clita erat amet dolor justo
                                            diam', 'thumbnail' => '', 'price' => '1600',  'discount' => ''],
            [ 'id' => 5, 'category' => 1, 'name' =>  'Zucchini', 'image' => 'menu-5.jpg', 'description' => 'Ipsum ipsum clita erat amet dolor justo
                                            diam', 'thumbnail' => '', 'price' => '3000',  'discount' => ''],
            [ 'id' => 6, 'category' => 1, 'name' =>  'Battered', 'image' => 'menu-6.jpg', 'description' => 'Ipsum ipsum clita erat amet dolor justo
                                            diam', 'thumbnail' => '', 'price' => '1400',  'discount' => ''],
            [ 'id' => 7, 'category' => 1, 'name' =>  'Lazani', 'image' => 'menu-7.jpg', 'description' => 'Ipsum ipsum clita erat amet dolor justo
                                            diam', 'thumbnail' => '', 'price' => '1000',  'discount' => ''],
            [ 'id' => 8, 'category' => 1, 'name' =>  'Buffalo Chicken', 'image' => 'menu-8.jpg', 'description' => 'Ipsum ipsum clita erat amet dolor justo
                                            diam', 'thumbnail' => '', 'price' => '2000',  'discount' => ''],
            [ 'id' => 9, 'category' => 2, 'name' =>  'Boneless', 'image' => 'menu-9.jpg', 'description' => 'Ipsum ipsum clita erat amet dolor justo
                                            diam', 'thumbnail' => '', 'price' => '1250',  'discount' => ''],
            [ 'id' => 10, 'category' => 2, 'name' => 'Chicken Fajita', 'image' => 'menu-10.jpg', 'description' => 'Ipsum ipsum clita erat amet dolor justo
                                            diam', 'thumbnail' => '', 'price' => '3000',  'discount' => ''],
            [ 'id' => 11, 'category' => 2, 'name' => 'Chicken Laxani', 'image' => 'menu-11.jpg', 'description' => 'Ipsum ipsum clita erat amet dolor justo
                                            diam', 'thumbnail' => '', 'price' => '4000',  'discount' => ''],
            [ 'id' => 12, 'category' => 2, 'name' => 'Chicken Lazi', 'image' => 'menu-12.jpg', 'description' => 'Ipsum ipsum clita erat amet dolor justo
                                            diam', 'thumbnail' => '', 'price' => '3000',  'discount' => ''],
            [ 'id' => 13, 'category' => 2, 'name' => 'Chicken Mix', 'image' => 'menu-13.jpg', 'description' => 'Ipsum ipsum clita erat amet dolor justo
                                            diam', 'thumbnail' => '', 'price' => '2000',  'discount' => ''],
            [ 'id' => 14, 'category' => 2, 'name' => 'Cheesy Chicken', 'image' => 'menu-14.jpg', 'description' => 'Ipsum ipsum clita erat amet dolor justo
                                            diam', 'thumbnail' => '', 'price' => '1000',  'discount' => ''],
            [ 'id' => 15, 'category' => 2, 'name' => 'Chicken Papaya', 'image' => 'menu-15.jpg', 'description' => 'Ipsum ipsum clita erat amet dolor justo
                                            diam', 'thumbnail' => '', 'price' => '3000',  'discount' => ''],
            [ 'id' => 16, 'category' => 2, 'name' => 'Chicken Sirloin', 'image' => 'menu-16.jpg', 'description' => 'Ipsum ipsum clita erat amet dolor justo
                                            diam', 'thumbnail' => '', 'price' => '2000',  'discount' => ''],
            [ 'id' => 17, 'category' => 3, 'name' => 'Chicken Steak', 'image' => 'menu-17.jpg', 'description' => 'Ipsum ipsum clita erat amet dolor justo
                                            diam', 'thumbnail' => '', 'price' => '5000',  'discount' => ''],
            [ 'id' => 18, 'category' => 3, 'name' => 'Chicken JUliena', 'image' => 'menu-18.jpg', 'description' => 'Ipsum ipsum clita erat amet dolor justo
                                            diam', 'thumbnail' => '', 'price' => '1000',  'discount' => ''],
            [ 'id' => 19, 'category' => 3, 'name' => 'Chicken Salmon', 'image' => 'menu-19.jpg', 'description' => 'Ipsum ipsum clita erat amet dolor justo
                                            diam', 'thumbnail' => '', 'price' => '1000',  'discount' => ''],
            [ 'id' => 20, 'category' => 3, 'name' => 'Chicken ', 'image' => 'menu-20.jpg', 'description' => 'Ipsum ipsum clita erat amet dolor justo
                                            diam', 'thumbnail' => '', 'price' => '4000',  'discount' => ''],
            [ 'id' => 21, 'category' => 3, 'name' => 'Rib', 'image' => 'menu-21.jpg', 'description' => 'Ipsum ipsum clita erat amet dolor justo
                                            diam', 'thumbnail' => '', 'price' => '5000',  'discount' => ''],
            [ 'id' => 22, 'category' => 3, 'name' => 'Mozzarella', 'image' => 'menu-22.jpg', 'description' => 'Ipsum ipsum clita erat amet dolor justo
                                            diam', 'thumbnail' => '', 'price' => '3000',  'discount' => ''],
            [ 'id' => 23, 'category' => 3, 'name' => 'Onion Chicken ', 'image' => 'menu-23.jpg', 'description' => 'Ipsum ipsum clita erat amet dolor justo
                                            diam', 'thumbnail' => '', 'price' => '2000',  'discount' => ''],
            [ 'id' => 24, 'category' => 3, 'name' => 'Crazy Dish', 'image' => 'menu-24.jpg', 'description' => 'Ipsum ipsum clita erat amet dolor justo
                                            diam', 'thumbnail' => '', 'price' => '1000',  'discount' => ''],

        ];
        Product::insert($products);
    }
}
