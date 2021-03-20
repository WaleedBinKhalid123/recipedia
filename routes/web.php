<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Dishes
Route::get('/dishes', [App\Http\Controllers\DishController::class, 'getDishes'])->name('dishes');
Route::get('/dish/{name}', [App\Http\Controllers\DishController::class, 'showDish'])->name('dish.show');
Route::get('/select/dish/{name}', [App\Http\Controllers\DishController::class, 'selectDish'])->name('dish.select');
Route::get('/back/dish', [App\Http\Controllers\DishController::class, 'backToDish'])->name('back.to.dish');


// Ingredients
Route::get('/my-ingredients', [App\Http\Controllers\IngredientController::class, 'getMyIngredients'])->name('my.ingredients');
Route::get('ingredients/add', [App\Http\Controllers\IngredientController::class, 'addIngredient'])->name('ingredient.add');
Route::get('ingredients/store', [App\Http\Controllers\IngredientController::class, 'storeIngredient'])->name('ingredients.store');




