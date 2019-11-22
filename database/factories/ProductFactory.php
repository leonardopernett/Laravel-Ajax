<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
   
    $title = $faker->sentence();
   
    return [
        'name' => $title,
        'short'=> $faker->text(100),
        'description'=> $faker->text(600)

    ];
});
