<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'user_title' => function() { return factory(App\UsersTitle::class)->create()->id;},
        'last_name' => $faker->name,
        'first_name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->phoneNumber,
        'city' => $faker->city,
        'user_type' => function() { return factory(App\UserTypes::class)->create()->id;},
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Role::class, function (Faker\Generator $faker) {
    return [
        'name'     => $faker->randomElement(["admin", "manager", "member", "guest"])
    ];
});

$factory->define(App\Staff::class, function (Faker\Generator $faker) {
    return [
        'nice_name'     => $faker->firstName,
        'first_name'    => $faker->firstName,
        'last_name'     => $faker->lastName,
        'email'         => $faker->email,
        'password'      => $faker->password,
        'role'          =>  $faker->randomElement(["admin", "manager", "member", "guest"])
    ];
});

$factory->define(App\Package::class, function (Faker\Generator $faker) {
    return [
        'name'           => $faker->sentence,
        'type'            => $faker->randomElement(["cruise", "holiday", "business", "custom"]),
        'description'     => $faker->paragraph(12),
        'city'           => $faker->city,
        'country'        => $faker->country,
        'price'          =>  $faker->numberBetween($min = 700, $max = 2147)
    ];
});

$factory->define(App\Page::class, function (Faker\Generator $faker) {
    return [
        'title'     => $faker->sentence,
        'content'     => $faker->paragraph(8),
    ];
});
