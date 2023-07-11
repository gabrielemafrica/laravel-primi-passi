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


// home
Route::get('/', function () {
    $saluto = 'Hello';
    $oggetto = 'Laravel';
    return view('home', compact('saluto', 'oggetto'));
})->name('home');
// page1
Route::get('/p1', function () {
    $saluto = 'Benvenuto';
    $oggetto = 'in Pagina 1';
    return view('p1', compact('saluto', 'oggetto'));
})->name('p1');
// page2
Route::get('/p2', function () {
    $saluto = 'Welcome';
    $oggetto = 'to Page 2';
    return view('p2', compact('saluto', 'oggetto'));
})->name('p2');
// page3
Route::get('/p3', function () {
    $saluto = 'Bine at venit';
    $oggetto = 'la pagina 3';
    return view('p3', compact('saluto', 'oggetto'));
})->name('p3');
