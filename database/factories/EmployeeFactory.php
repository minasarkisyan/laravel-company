<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'salary' => $faker->numberBetween(100, 750),
        'position_id' => rand(1, 5),
        'company_id' => rand(1, 15)
    ];
});
