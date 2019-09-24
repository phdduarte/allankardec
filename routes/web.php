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

Route::get('usuarios','UsuariosController@index');





// Route::get('/cartas','ManuscritosController@cartas');
// Route::get('/fotos','ManuscritosController@fotos');
// Route::get('/jornais','ManuscritosController@jornais');
// Route::get('/livros','ManuscritosController@livros');
// Route::get('/revistas','ManuscritosController@revistas');

Route::get('/links','ManuscritosController@links');
Route::get('/contato','ManuscritosController@contato');
Route::get('/sobre','ManuscritosController@sobre');
Route::get('/termos','ManuscritosController@termos');
Route::get('/glossario','ManuscritosController@glossario');

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/manuscritos','ManuscritosController@index');  
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('manuscritos/novo','ManuscritosController@novo');
    Route::get('manuscritos/{manuscrito}/editar','ManuscritosController@editar');
    Route::post('manuscritos/salvar','ManuscritosController@salvar');
    Route::patch('manuscritos/{manuscrito}','ManuscritosController@atualizar');
    Route::delete('manuscritos/{manuscrito}','ManuscritosController@deletar');
  
    Route::get('/','ManuscritosController@imprimir');
});  

Route::get('/{tipo}','ManuscritosController@tipo');







