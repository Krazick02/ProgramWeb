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

Route::get('/saludo/{name}', function ($name) {
    return 'Holiwi Sr.'.$name;
});

Route::get('/suma/{n1}/{n2}', function ($n1, $n2) {
    return "La suma es ".($n1+$n2);
})->where(['n1' => '[0-9]+','n2' => '[0-9]+']);

Route::get('/multi/{n1}/{n2}/{n3}', function ($n1, $n2,$n3) {










    return "La multiplicacio n es ".($n1*$n2*$n3);
})->where(['n1' => '[0-9]+','n2' => '[0-9]+','n3' => '[0-9]+']);