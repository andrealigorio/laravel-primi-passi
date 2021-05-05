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
    return view('welcome');
});
Route::get('/cliccami', function () {
    return view('cliccami');
});
Route::get('/contatti', function () {
    $data = [
        "nome" => "Marco",
        "hobbies" => [
            "calcio", "pc game", "nuoto"
        ]
    ];
    return view('contatti', $data);
});
