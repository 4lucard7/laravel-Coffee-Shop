<?php

use Illuminate\Support\Facades\Route;

$coffees = [
    [
        'name' => 'Espresso',
        'description' => 'Strong and classic Italian coffee',
        'price' => 15,
        'image' => 'espresso.jpg'
    ],
    [
        'name' => 'Cappuccino',
        'description' => 'Coffee with milk foam',
        'price' => 20,
        'image' => 'cappuccino.jpg'
    ],
    [
        'name' => 'Latte',
        'description' => 'Smooth coffee with milk',
        'price' => 22,
        'image' => 'latte.jpg'
    ],
    [
        'name' => 'Americano',
        'description' => 'Light coffee with hot water',
        'price' => 18,
        'image' => 'americano.jpg'
    ],
    [
        'name' => 'Mocha',
        'description' => 'Chocolate flavored coffee',
        'price' => 25,
        'image' => 'mocha.jpg'
    ],
    [
        'name' => 'Macchiato',
        'description' => 'Espresso with a little milk foam',
        'price' => 19,
        'image' => 'macchiato.jpg'
    ],
    [
        'name' => 'Flat White',
        'description' => 'Velvety coffee with milk',
        'price' => 23,
        'image' => 'flatwhite.jpg'
    ],
    [
        'name' => 'Irish Coffee',
        'description' => 'Coffee with whiskey and cream',
        'price' => 30,
        'image' => 'irishcoffee.jpg'
    ]
];

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/menu', function () use ($coffees) {
    return view('menu', ['coffees' => $coffees]);
})->name('menu');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
