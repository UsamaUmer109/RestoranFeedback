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
            [ 'id' => 1, 'user_id' => 1,  'product_id' => 1, 'review' =>  'Very Good Taste','rating' =>  5,   'status' => 0],
            [ 'id' => 2, 'user_id' => 3,  'product_id' => 2, 'review' =>  'I like your taste','rating' =>  5,   'status' => 0],
            [ 'id' => 3, 'user_id' => 3,  'product_id' => 1, 'review' =>  'Very Good Taste','rating' =>  4,   'status' => 0],
            [ 'id' => 4, 'user_id' => 4,  'product_id' => 2, 'review' =>  'Very Good Taste','rating' =>  4,   'status' => 0],
            [ 'id' => 5, 'user_id' => 7,  'product_id' => 3, 'review' =>  'Average Taste','rating' =>  3,   'status' => 0],
            [ 'id' => 6, 'user_id' => 6,  'product_id' => 3, 'review' =>  'Very Bad Taste','rating' =>  2,   'status' => 0],
            [ 'id' => 7, 'user_id' => 5,  'product_id' => 4, 'review' =>  'Amazing Taste','rating' =>  4,   'status' => 0],
            [ 'id' => 8, 'user_id' => 3,  'product_id' => 4, 'review' =>  'Very Marvelous ','rating' =>  5,   'status' => 0],
            [ 'id' => 9, 'user_id' => 2,  'product_id' => 5, 'review' =>  'Taste is okay','rating' =>  3,   'status' => 0],

        ];
        Rating::insert($rating);
    }
}
