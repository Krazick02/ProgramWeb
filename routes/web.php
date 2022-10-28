<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\TareA;
use App\Http\Controllers\UserController;
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


Route::get('/',[UserController::class,'index'])->name('users.index');
Route::get('/users/create',[UserController::class,'create'])->name('users.create');
Route::get('/users/{id}',[UserController::class,'show'])->name('users.show');
Route::post('/users',[UserController::class,'store'])->name('users.store');

Route::get('/clients',[ClientController::class,'index'])->name('clients.index');
Route::get('/clients/create',[ClientController::class,'create'])->name('clients.create');
Route::get('/clients/{id}',[ClientController::class,'show'])->name('clients.show');
Route::post('/clients',[ClientController::class,'store'])->name('clients.store');

// Route::get('/', function () {
//     return 'Vista inicio';
// });
// Route::get('/saludo/{name}', function ($name) {
//     return 'Holiwi Sr.'.$name;
// });

// Route::get('/suma/{n1}/{n2}', function ($n1, $n2) {
//     return "La suma es ".($n1+$n2);
// })->where(['n1' => '[0-9]+','n2' => '[0-9]+']);

// Route::get('/multi/{n1}/{n2}/{n3}', function ($n1, $n2,$n3) {
//     return "La multiplicacio n es ".($n1*$n2*$n3);
// })->where(['n1' => '[0-9]+','n2' => '[0-9]+','n3' => '[0-9]+']);
