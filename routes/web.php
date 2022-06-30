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

Route::middleware('autenticador')->group(function() {

    Route::get('/', function() {
        return redirect('/series'); 
    });

    Route::get('/series', 'SeriesController@index')->name('listar_series');
    Route::get('/series/criar', 'SeriesController@create')->name('form_criar_serie');
    Route::post('/series/criar', 'SeriesController@store')->name('criar_serie');
    Route::delete('/series/destroy/{series}', 'SeriesController@destroy')->name('deletar_serie');
    Route::get('/series/{series}/editar', 'SeriesController@edit')->name('form_editar');
    Route::put('/series/{series}/editar', 'SeriesController@update')->name('atualizar_serie');

    Route::get('series/{series}/seasons', 'SeasonsController@index')->name('listar_temporadas');

    Route::get('seasons/{season}/episodes', 'EpisodesController@index')->name('listar_episodes');
    Route::post('seasons/{season}/episodes', 'EpisodesController@update')->name('atualizar_episodes');
});

Route::get('/login', 'LoginController@index')->name('login');
Route::post('/login', 'LoginController@store')->name('signin');
Route::get('/logout', 'LoginController@destroy')->name('logout');

Route::get('/register', 'UsersController@create')->name('users.create');
Route::post('/register', 'UsersController@store')->name('users.store');