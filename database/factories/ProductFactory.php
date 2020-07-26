<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

// Generaremos datos falsos en la tabla Product
$factory->define(Product::class, function (Faker $faker) {
    return [
        // declaramos las columnas a las cuales generaremos los datos
        'name' => $faker->name,                             // Utilizamos la libreria Faker para generar nombres
        'price' => $faker->numberBetween(10000, 60000)      // Utilizamos la libreria Faker para generar numeros entre 10000 y 60000
    ];
});
