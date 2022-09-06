<?php
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

use App\Games;

// Route::view('/', 'landing.index');

Route::get('/', function () {
    return view('landing.index', [
        'games' => null
    ]);
})->name('landing.index');

Auth::routes(['verify' => false, 'reset' => false]);

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    Route::get('/publishers', 'PublishersController@index')->name('publishers.index');
    Route::get('/publishers/{publishers}/show', 'PublishersController@show')->name('publishers.show');
    Route::get('/publishers/create', 'PublishersController@create')->name('publishers.create');
    Route::post('/publishers/create', 'PublishersController@store')->name('publishers.store');
    Route::get('/publishers/{publishers}/edit', 'PublishersController@edit')->name('publishers.edit');
    Route::post('/publishers/{publishers}/edit', 'PublishersController@update')->name('publishers.update');
    Route::get('/publishers/{publishers}/delete', 'PublishersController@destroy')->name('publishers.delete');
    
    Route::get('/games', 'GamesController@index')->name('games.index');
    Route::get('/games/{games}/show', 'GamesController@show')->name('games.show');
    Route::get('/games/create', 'GamesController@create')->name('games.create');
    Route::post('/games/create', 'GamesController@store')->name('games.store');
    Route::get('/games/{games}/edit', 'GamesController@edit')->name('games.edit');
    Route::post('/games/{games}/edit', 'GamesController@update')->name('games.update');
    Route::get('/games/{games}/delete', 'GamesController@destroy')->name('games.delete');
});
