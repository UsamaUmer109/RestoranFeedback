<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rating;

class RatingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rating = [
            [ 'id' => 1, 'user_id' => 1,  'product_id' => 1, 'title' => 'About Taste', 'category' => 'taste', 'review' =>  'Very Good Taste','rating' =>  5,     'status' => 1],
            [ 'id' => 2, 'user_id' => 3,  'product_id' => 2, 'title' => 'About Taste', 'category' => 'taste', 'review' =>  'I like your taste','rating' =>  5,   'status' => 1],
            [ 'id' => 3, 'user_id' => 3,  'product_id' => 1, 'title' => 'About Taste', 'category' => 'taste', 'review' =>  'Very Good Taste','rating' =>  4,     'status' => 1],
            [ 'id' => 4, 'user_id' => 4,  'product_id' => 2, 'title' => 'About Taste', 'category' => 'taste', 'review' =>  'Very Good Taste','rating' =>  4,     'status' => 1],
            [ 'id' => 5, 'user_id' => 7,  'product_id' => 3, 'title' => 'About Taste', 'category' => 'taste', 'review' =>  'Average Taste','rating' =>  3,       'status' => 1],
            [ 'id' => 6, 'user_id' => 6,  'product_id' => 3, 'title' => 'About Taste', 'category' => 'taste', 'review' =>  'Very Bad Taste','rating' =>  2,      'status' => 1],
            [ 'id' => 7, 'user_id' => 5,  'product_id' => 4, 'title' => 'About Taste', 'category' => 'taste', 'review' =>  'Amazing Taste','rating' =>  4,       'status' => 1],
            [ 'id' => 8, 'user_id' => 3,  'product_id' => 4, 'title' => 'About Taste', 'category' => 'taste', 'review' =>  'Very Marvelous ','rating' =>  5,     'status' => 1],
            [ 'id' => 9, 'user_id' => 2,  'product_id' => 5, 'title' => 'About Taste', 'category' => 'taste', 'review' =>  'Taste is okay','rating' =>  3,       'status' => 1],

        ];
        Rating::insert($rating);
    }
}
