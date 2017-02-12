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
    
    return "Pantalla Principal";
});

Route::get('/login', function(){
    return "Login de usuario";
});

Route::get('/logout', function(){
    return "Logout de usuario";
});

Route::get('/marcas', function(){
    return "Listado de Marcas";
});

Route::get('/marcas/show/{id}', function(){
    return "Detalles de marcas";
});

Route::get('/marcas/create', function(){
    return "Crear Marca";
});

Route::get('/marcas/edit/{id}', function(){
    return "Editar Marca";
});