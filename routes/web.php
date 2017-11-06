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
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {

  Route::group(['middleware' => 'auth'], function () {

  });

  Route::group(['middleware' => 'acces'], function () {
    Route::get('/crear_proyecto', function () {
        return view('crear_proyecto');
    });
    Route::get('/crear_issue', function () {
        return view('crear_issue');
    });
    Route::get('/crear_usuario', function () {
        return view('crear_usuario');
    });

    Route::get('/agregar_issue', function () {
        return view('proy_issue');
    });

    Route::get('/agregar_comentario', function()
    {
      return view('issue_comentario');
    });
  });
    Route::name('lista_usuarios.edit')
        ->get('lista_usuarios/{lista_usuarios}/edit', 'UserController@edit')
        ->middleware('acces');

    Route::resource('lista_usuarios','UserController');
    Route::resource('lista_issues','IssueController');
    Route::resource('lista_proyectos','ProyectController');
    Route::resource('comentarios','ComentarioController');
    Route::name('agregar.agregar_i')->get('agregar_issue/{id}/agregar','ProyectController@agregar_i');
    Route::name('agregar.agregar_c')->get('agregar_comentario/{id}/agregar','IssueController@agregar_c');
    Route::name('seleccionar.seleccionar_i')->get('seleccionar_issues/{id}/seleccionar','IssueController@seleccionar_i');
});
