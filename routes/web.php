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
    return 'this is home page';
});

Route::get('/{id}', function ($id) {
    return 'your number is: '.$id;
});
Route::get('/{id}/{name}', function ($id,$name) {
    return '<h1>Your name is: '.$name.', and your number is: '.$id.'</h1>';
});
