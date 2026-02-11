<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return 'Hello Laravel!';
});

use App\Http\Controllers\ProductController;

Route::get('/Products/{id}', [ProductController::class, 'show'])
->name('Products.show');

Route::get('/index', [ProductController::class, 'index'])
    ->name('index');


use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])
    ->name('home');

Route::get('/about', [PageController::class, 'about'])
    ->name('about');

Route::get('/contact', [PageController::class, 'contact'])
->name('contact');

use App\Http\Controllers\ProductsController;

Route::resource('/products', ProductsController::class);

use Illuminate\Http\Request;

Route::get('/token', function (Request $request) {
    $token = $request->session()->token();

    $token = csrf_token();

    // ...
});
