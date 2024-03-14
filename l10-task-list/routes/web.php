<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index', [
        'name' => 'Laravel'
    ]);
});

Route::get('/xxx', function() {
    return 'Hello World';
})->name('hello');

Route::get('/hallo', function() {
    return redirect()->route('hello');
});

Route::get('/greet/{name}', function($name) {
    return "Hello $name!";
});

Route::fallback(function() {
    return 'Still got somewhere!';
});

// GET - Get request - Read data
// POST - Post request - Store data
// PUT - Put request - Update or Modify data
// DELETE - Delete request - Delete data
