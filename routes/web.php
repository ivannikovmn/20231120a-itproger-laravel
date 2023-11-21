<?php

use App\Http\Controllers\MainController;
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

// Route::get('/', function () {
//     return view(view: 'home');
// });

// Route::get('/', action: 'MainController@home');
Route::get('/', [MainController::class, 'home']);

// Route::get('/about', function () {
//     return view(view: 'about');
// });

// Route::get('/about', action: 'MainController@about');
Route::get('/about', [MainController::class, 'about']);

Route::get('/review', [MainController::class, 'review'])->name(name: 'review');
Route::post('/review/check', [MainController::class, 'review_check']);

// Route::get('/user/{id}/{name}', function ($id, $name) {
//     return 'ID: '.$id.'. Name: '.$name;
// });
