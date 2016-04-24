<?php
/** @var  Factory */

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
        'verified' => true
    ];
});
$factory->define(App\Models\Category::class, function(Faker\Generator $faker){
    return [
        'name' => $faker->sentence(1),
    ];
});
$factory->define(App\Models\Author::class, function(Faker\Generator $faker){
    return [
        'name' => $faker->name
    ];
});
$factory->define(App\Models\Post::class, function(Faker\Generator $faker){
    return [
        'title' => $faker->sentence(10, true),
        'description' => $faker->text(60),
        'content' => $faker->text(1200),
        'category_id' => $faker->numberBetween(1, 10),
        'author_id' => $faker->numberBetween(1, 10),
    ];
});
$factory->define(App\Models\Author::class, function(Faker\Generator $faker){
    return [
        'name' => $faker->name,
        'work' => $faker->sentence(2),
        'user_id' => $faker->numberBetween(1, 10),
    ];
});
$factory->define(App\Models\Tag::class, function(Faker\Generator $faker){
    return [
        'name' => $faker->sentence(3, true),
    ];
});
$factory->define(App\Models\Comment::class, function(Faker\Generator $faker){
    return [
        'content' => $faker->text(120, true),
        'name' => $faker->name,
        'email' => $faker->email,
        'post_id' => $faker->numberBetween(1, 100),
    ];
});

