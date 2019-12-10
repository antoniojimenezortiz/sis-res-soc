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
    Route::get('/tipo_usuario_update', ['as'=>'administrador.tipo_usuario.update','uses'=>'TipoUsuarioController@update']);
    Route::get('/tipo_usuario_delete', ['as'=>'administrador.tipo_usuario.destroy','uses'=>'TipoUsuarioController@delete']);
    //USUARIOS

});
