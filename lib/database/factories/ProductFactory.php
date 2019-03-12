<?php

use Faker\Generator as Faker;

use App\Models\Category;
$factory->define(App\Models\Product::class, function (Faker $faker) {
    $cateIds= Category::pluck('id'); // lấy list tất cả id bảng breeds
    // dd($breedIds);
    return [
    	'name' => 'Giày'.rand(1,100),
    	'price'=>rand(200,2000),
    	'sale'=>rand(0,1),
    	'description'=>'Giày chất lượng cao'.rand(1,100),
    	'category_id' => $faker->randomElement($cateIds),
    ];
});