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

Route::get('/', function () {
    return view('home');
});

Route::get('/produto/pesquisar', 'ProdutoController@pesquisar')->middleware('auth');
Route::post('/produto/pesquisar', 'ProdutoController@pesquisar')->middleware('auth');

Route::get('/produto/inserir', 'ProdutoController@mostrar_inserir')->middleware('auth');
Route::post('/produto/inserir', 'ProdutoController@inserir')->middleware('auth');

Route::get('/produto/alterar/{id}', 'ProdutoController@mostrar_alterar')->middleware('auth');
Route::post('/produto/alterar', 'ProdutoController@alterar')->middleware('auth');

Route::get('/produto/excluir/{id}', 'ProdutoController@excluir')->middleware('auth');

Route::get('/produto/inicio', 'ProdutoController@inicio')->middleware('auth');
Route::post('/produto/inicio', 'ProdutoController@inicio')->middleware('auth');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
