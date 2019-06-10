<?php

use Faker\Generator as Faker;

$factory->define(App\Blog::class, function (Faker $faker) {
    $filepath = public_path("images");
    return [
        //
        "name"=>$faker->name,
        "title"=>$faker->text($max=20),
        "body"=> $faker->realText($maxNbChars=190),
        "image"=> "my.jpg",
        ];
});
