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

Route::get('/produto/pesquisar', 'ProdutoController@pesquisar');
Route::post('/produto/pesquisar', 'ProdutoController@pesquisar');

Route::get('/produto/inserir', 'ProdutoController@mostrar_inserir');
Route::post('/produto/inserir', 'ProdutoController@inserir');

Route::get('/produto/alterar/{id}', 'ProdutoController@mostrar_alterar');
Route::post('/produto/alterar', 'ProdutoController@alterar');

Route::get('/produto/excluir/{id}', 'ProdutoController@excluir');

Route::get('/produto/inicio', 'ProdutoController@inicio');
Route::post('/produto/inicio', 'ProdutoController@inicio');


