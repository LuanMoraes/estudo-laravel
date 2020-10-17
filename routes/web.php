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
    return view('welcome');
});
/*
Route::get('pessoas','PessoaController@index');
Route::get('pessoas/create','PessoaController@create');
Route::post('pessoas','PessoaController@store');
Route::get('pessoas/{pessoa}/edit','PessoaController@edit'); //Está utilizando a função edit do PessoaController
Route::put('pessoas/{pessoa}','PessoaController@update');
Route::get('pessoas/{pessoa}','PessoaController@show');
Route::delete('pessoas/{pessoa}','PessoaController@destroy');
*/
Route::resource('pessoas','PessoaController');