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

/*
|
| WEB ROUTES
|
*/
Route::get('/', function () { return view('web.home'); })->name('homePage');

Route::get('formacion', function () { return view('web.formacion'); })->name('formacion');

Route::get('habilidades', function () { return view('web.habilidades'); })->name('habilidades');

Route::get('mejoramiento', function () { return view('web.mejoramiento'); })->name('mejoramiento');

Route::get('contacto', function () { return view('web.contacto'); })->name('contacto');

Route::get('aderca_de_mi', function () { return view('web.acerca_de_mi'); })->name('aderca_de_mi');

Route::get('clientes', function () { return view('web.clientes'); })->name('clientes');

Route::get('pagos', function () { return view('web.pagos'); })->name('pagos');

Route::get('/payment', function () { return view('payment'); });


/*
|
| ADMIN ROUTES
|
*/
Route::get('/admin/login', function(){ return view('admin.login'); })->name('admin.login');

Route::get('/admin', function(){ return view('admin.home'); })->name('admin.home');