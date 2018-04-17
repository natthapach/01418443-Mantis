<?php

use Faker\Generator as Faker;
use App\Project as Project;
use App\User as User;
use App\Category as Category;

$factory->define(App\Issue::class, function (Faker $faker) {
    return [
        'project_id' => $faker->randomElement(
    		Project::all()->pluck("id")->toArray()),
        'category_id' => $faker->randomElement(
    		Category::all()->pluck("id")->toArray()),
    	'summary' => $faker->sentence(),
    	'status' => $faker->randomElement(['new', 'feedback', 'acknowledged', 'confirmed', 'resolved', 'closed']),
        'reporter' => $faker->randomElement(
    		User::all()->pluck("id")->toArray()),
        'assigned_to' => $faker->randomElement(
    		User::all()->pluck("id")->toArray()),
    	'priority' => $faker->randomElement(['none', 'low', 'normal', 'high', 'urgent', 'immediate']),
    	'severity' => $faker->randomElement(['feature', 'trivial', 'text', 'tweak', 'minor', 'major', 'crash', 'block']),
    	'reproducibility' => $faker->randomElement(['always', 'sometimes', 'random', 'have not tried', 'unable to reproduce', 'N/A']),
    	'description' => $faker->text,
    	'steps' => $faker->text    	   
    ];
});
