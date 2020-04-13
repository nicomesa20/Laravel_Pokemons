<?php

use Illuminate\Support\Facades\Route;
use LaraDex\Http\Controllers\PokemonController;
use LaraDex\Http\Controllers\TrainerController;


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
    return view('welcome');
});

Route::resource('trainers','TrainerController');
// Route::resource('pokemons', 'PokemonController');
Route::post('trainers/{trainer}/pokemons','PokemonController@store');
Route::get('trainers/{trainer}/pokemons','PokemonController@index');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();


