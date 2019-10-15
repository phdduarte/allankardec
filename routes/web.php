<?php


Route::get('/links','ManuscritosController@links');
Route::get('/contato','ManuscritosController@contato');
Route::get('/sobre','ManuscritosController@sobre');
Route::get('/termos','ManuscritosController@termos');
Route::get('/glossario','ManuscritosController@glossario');
Route::get('/','ManuscritosController@imprimir');

Route::get('/search','ManuscritosController@search');

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/manuscritos','ManuscritosController@index');  
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('manuscritos/novo','ManuscritosController@novo');
    Route::get('manuscritos/{manuscrito}/editar','ManuscritosController@editar');
    Route::post('manuscritos/salvar','ManuscritosController@salvar');
    Route::patch('manuscritos/{manuscrito}','ManuscritosController@atualizar');
    Route::delete('manuscritos/{manuscrito}','ManuscritosController@deletar');

    Route::resource('usuarios', 'UsuariosController');

    // Route::get('usuarios','UsuariosController@index');
    // Route::get('usuarios/novo','UsuariosController@create');
    // Route::delete('usuarios/novo','UsuariosController@create');
});  
Route::get('/pdf/{id}','ManuscritosController@show');
Route::get('/{tipo}','ManuscritosController@tipo');
