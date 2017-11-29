<?php

use Faker\Generator as Faker;

$factory->define(App\blog::class, function (Faker $faker) {
    return [
        //
        'title' => $faker->title,
        'body' => $faker->sentence,
        'user_id' => factory('App\User')->create() ->id,
//        'user_id'=>$faker->unique()->randomDigit,
    ];
});
