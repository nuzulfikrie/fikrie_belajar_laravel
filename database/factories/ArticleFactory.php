<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        //fake data

        'title' => $faker->words(5,true),
        'body' => $faker->body(500),
        'published' => $faker->boolean



    ];
});
