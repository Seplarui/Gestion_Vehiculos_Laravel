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
    //return view('welcome');
    //return "Pantalla Principal";

    return view('home');
});

Route::get('/login', function() {
    //return "Login de usuario";
    return view('views.auth.login');
});

Route::get('/logout', function() {
    return "Logout de usuario";
});

Route::get('/marcas', function() {
    //return "Listado de Marcas";
    
    return view('marcas.index');
});

Route::get('/marcas/show/{id}', function() {
    //return "Detalles de marcas";
    return view('marcas.show');
});

Route::get('/marcas/create', function() {
    //return "Crear Marca";
    
    return view('marcas.create');
});

Route::get('/marcas/edit/{id}', function() {
    //return "Editar Marca";
    
    return view('marcas.edit');
});
