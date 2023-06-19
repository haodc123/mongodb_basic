<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/user/{id}', [UserController::class, 'show']);
Route::get('/users', [UserController::class, 'index']);

// Auth::routes();
// Route::get('logout', function ()
// {
//     auth()->logout();
//     Session()->flush();

//     return Redirect::to('/');
// })->name('logout');


// React below

Route::get('/react', function () {
    return view('react.welcome');
});

Route::get('api_get_items/{m}/{l}/{d}/{s}/{last}', [ItemController::class, 'api_get_items'])->name('item.list');
