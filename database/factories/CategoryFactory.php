<?php

use Faker\Generator as Faker;


$factory->define(App\Category::class, function (Faker $faker) {
    return [
    	'project_id' => $faker->randomElement(
    		App\Project::all()->pluck("id")->toArray()),
        'name' => $faker->name,
    	'assign_to' => $faker->randomElement(
    		App\User::all()->pluck("id")->toArray()),        
    ];
});
