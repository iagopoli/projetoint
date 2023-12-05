<?php

<<<<<<< HEAD
use App\Http\Controllers\ComentarioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DuvidaController;
=======
use Illuminate\Support\Facades\Route;
>>>>>>> 6f63f15ae31d3258c4b56862751e4a7ffa5bf0eb

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
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/alimentaçao', function () {
    return view('alimentaçao');
});

Route::get('/TMB', function () {
    return view('TMB');
});

Route::get('/IMC', function () {
    return view('IMC');
});

<<<<<<< HEAD
=======
Route::get('/faq', function () {
    return view('faq');
});
>>>>>>> 6f63f15ae31d3258c4b56862751e4a7ffa5bf0eb

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/habitos', function () {
    return view('habitos');
});
<<<<<<< HEAD





Route::resource('faq', DuvidaController::class);
Route::resource('comentarios', ComentarioController::class);

Auth::routes();

=======
>>>>>>> 6f63f15ae31d3258c4b56862751e4a7ffa5bf0eb
