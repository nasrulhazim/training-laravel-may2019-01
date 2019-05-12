<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Profile;
use Faker\Generator as Faker;

$factory->define(Profile::class, function (Faker $faker) {
    return [
	'gender' => $faker->randomElement(['M', 'F']),
	'dob' => $faker->date(
		'Y-m-d', 
		now()->subYears(
			$faker->randomElement(range(5,10))
		)
	),
	'race' => $faker->randomElement([
		'Malay',
		'Indian',
		'Chinese',
		'Others',
	]),
	'religion' => $faker->randomElement([
		'Islam',
		'Christian',
		'Hindu',
		'Others',
	])	
    ];
});
