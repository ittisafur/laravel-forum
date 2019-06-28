<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Reply;
use App\User;
use App\Model\Question;
use Faker\Generator as Faker;

$factory->define(Reply::class, function (Faker $faker) {
    return [
        'body' => $faker->text,
        'question_id' => function(){
        	return Question::all()->random();
        },
        'user_id' => function(){
        	return User::all()->random();
        }
    ];
});
