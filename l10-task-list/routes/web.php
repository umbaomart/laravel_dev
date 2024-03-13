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
    // return view('welcome');
    return 'Main Page';
});

Route::get('/hello', function() {
    return 'Hello World';
});

Route::get('/hallo', function() {
    return redirect('/hello');
});

Route::get('/greet/{name}', function($name) {
    return "Hello $name!";
});


// GET - Get request - Read data
// POST - Post request - Store data
// PUT - Put request - Update or Modify data
// DELETE - Delete request - Delete data
