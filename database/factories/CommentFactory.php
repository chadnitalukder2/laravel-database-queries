<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Comment;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
// class CommentFactory extends Factory
// {
//     /**
//      * Define the model's default state.
//      *
//      * @return array<string, mixed>
//      */
//     public function definition()
//     {
//         return [
//            
//         ];
//     }
  

// }



 $factory->define(Comment::class, function(Faker $faker){
    return[
        'content' => $faker->text(500),
         'user_id' => $faker->numberBetween(1,3)
    ];
});