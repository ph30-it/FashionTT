<?php

use Faker\Generator as Faker;

use App\Models\Product;
$factory->define(App\Models\Image::class, function (Faker $faker) {
    $cateIds= Product::pluck('id'); // lấy list tất cả id bảng breeds
    // dd($breedIds);
    return [
    	'name' => 'm1.png',
    	'product_id' => $faker->randomElement($cateIds),
    ];
});