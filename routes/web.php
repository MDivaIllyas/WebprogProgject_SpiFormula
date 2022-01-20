<?php

use App\Http\Controllers\ExController;
use Illuminate\Support\Facades\Route;
use App\Models\Exploring;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});



Route::get('/Explore', [ExController::class, 'index']);

Route::get('/Explore/{slug}', [ExController::class, 'show']);

Route::get('/Login', [LoginController::class, 'index']);

Route::get('/About_US', function () {
    return view('profile', [
        "title" => "About US",
        "about" => "~We Are CookBook~",
        "about2" => "Providing you with the best recipes available all around the globe.",
        "about3" => "At CookBook, we want to solve the biggest problem during pandemic: cooking.
        People need to know what kinds of food to cook while cannot go outside , limited ingredients, and how to cook them into delicious foods since COVID-19 that happened recently which caused the goverment to do a quarantine/lockdown procedure.
        Restaurants, eateries, and disros need to find new innovation and recipes in oreder to attract and gain more customers, while also determine where to allocate resources in order to add new menus as effectively as possible. 
        Investors need to know which apps and genres are growing the quickest, and where users are really spending their time (and money).
        In publishing recipes, we need to guarantee the taste of these recipes to make our website guests happy yet satisfied. CookBook provides the most delicious and fine recipes for you to try at home . 
        We aim to make this website helpful to as many people as possible."
    ]);
});