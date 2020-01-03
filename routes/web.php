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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => ['auth']],function(){

    //TIPO DE USUARIO
    Route::get('/tipo_usuario', ['as'=>'administrador.tipo_usuario','uses'=>'TipoUsuarioController@index']);
    Route::post('/tipo_usuario_store', ['as'=>'administrador.tipo_usuario.store','uses'=>'TipoUsuarioController@store']);
    Route::get('/tipo_usuario_edit', ['as'=>'administrador.tipo_usuario.edit','uses'=>'TipoUsuarioController@edit']);
    Route::post('/tipo_usuario_update', ['as'=>'administrador.tipo_usuario.update','uses'=>'TipoUsuarioController@update']);
    Route::post('/tipo_usuario_delete/{id}', ['as'=>'administrador.tipo_usuario.destroy','uses'=>'TipoUsuarioController@destroy']);
    //USUARIOS
    Route::get('/usuario', ['as'=>'administrador.usuario','uses'=>'UsersController@index']);
    Route::post('/usuario_store', ['as'=>'administrador.usuario.store','uses'=>'UsersController@store']);
    Route::get('/usuario_edit', ['as'=>'administrador.usuario.edit','uses'=>'UsersController@edit']);
    Route::post('/usuario_update', ['as'=>'administrador.usuario.update','uses'=>'UsersController@update']);
    Route::post('/usuario_delete/{id}', ['as'=>'administrador.usuario.destroy','uses'=>'UsersController@destroy']);
 
});
