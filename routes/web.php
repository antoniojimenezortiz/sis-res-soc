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
 
    //FACULTADES
    Route::get('/facultad', ['as'=>'administrador.facultad','uses'=>'FacultadController@index']);
    Route::post('/facultad_store', ['as'=>'administrador.facultad.store','uses'=>'FacultadController@store']);
    Route::get('/facultad_edit', ['as'=>'administrador.facultad.edit','uses'=>'FacultadController@edit']);
    Route::post('/facultad_update', ['as'=>'administrador.facultad.update','uses'=>'FacultadController@update']);
    Route::post('/facultad_delete/{id}', ['as'=>'administrador.facultad.destroy','uses'=>'FacultadController@destroy']);
 
     //AREA
     Route::get('/area', ['as'=>'administrador.area','uses'=>'AreaController@index']);
     Route::post('/area_store', ['as'=>'administrador.area.store','uses'=>'AreaController@store']);
     Route::get('/area_edit', ['as'=>'administrador.area.edit','uses'=>'AreaController@edit']);
     Route::post('/area_update', ['as'=>'administrador.area.update','uses'=>'AreaController@update']);
     Route::post('/area/{id}', ['as'=>'administrador.area.destroy','uses'=>'AreaController@destroy']);

     //PROGRAMA
     Route::get('/programa', ['as'=>'administrador.programa','uses'=>'ProgramaController@index']);
     Route::post('/programa_store', ['as'=>'administrador.programa.store','uses'=>'ProgramaController@store']);
     Route::get('/programa_edit', ['as'=>'administrador.programa.edit','uses'=>'ProgramaController@edit']);
     Route::post('/programa_update', ['as'=>'administrador.programa.update','uses'=>'ProgramaController@update']);
     Route::post('/programa/{id}', ['as'=>'administrador.programa.destroy','uses'=>'ProgramaController@destroy']);
  

    //ETAPA 
    Route::resource('etapa', 'EtapaController');
});
