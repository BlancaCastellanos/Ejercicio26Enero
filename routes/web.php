<?php

use Illuminate\Support\Facades\Route;

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
    return ('Aqui se ven las notas');
});

Route::get('notas/{id}/detalles', function ($id) {
    return 'Aqui se visualizan los detalles de la nota con id '.$id;
});

Route::get('notas/crear', function () {
    return 'Aqui se crean las notas';
});

Route::get('notas/listar', function () {
    return 'Aqui se listan las notas';
});

Route::get('notas/editar', function(){
    return 'Aqui se editan las notas';
});
