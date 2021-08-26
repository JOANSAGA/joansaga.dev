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
    return view('welcome');
})->name("home");

Route::get('/habilidades', function () {
    return view('welcome');
})->name("habilidades");

Route::get('/proyectos', function () {
    return view('welcome');
})->name("proyectos");

Route::get('/servicios', function () {
    return view('welcome');
})->name("servicios");

Route::get('/blog', function () {
    return view('welcome');
})->name("blog");
