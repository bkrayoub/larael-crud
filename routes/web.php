<?php

use App\Http\Controllers\PromotionController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/insert', [PromotionController::class, 'insert']);

Route::get('/add', function(){
    return view('add');
});

Route::get('/', [PromotionController::class, 'RedirectPage']);

Route::get('/list', [PromotionController::class, 'select']);

Route::get('/index', [PromotionController::class, 'select']);

Route::get('delete/{id}', [PromotionController::class, 'delete']);

Route::get('/edit/{id}', [PromotionController::class, 'edit']);

Route::put('update/{id}', [PromotionController::class, 'update']);


