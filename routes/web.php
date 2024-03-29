<?php

use Illuminate\Support\Facades\Route, App\Http\Controllers;

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

Route::post('/', function () {
    $phone = request('phone');
    $phone = preg_replace('~\D+~','', $phone);
    if ($phone) {
        return redirect("/phones/$phone");
    } else return redirect('/');
});

Route::view('/promo/', 'promo');
Route::get('/phones/{phone}', [Controllers\VisitController::class, 'getPhone']);
Route::get('/articles/{id}', [Controllers\VisitController::class, 'getArticle']);

Route::get('/edit/{id}', [Controllers\CabinetController::class, 'editArticle']);
Route::post('/edit/{id}', [Controllers\CabinetController::class, 'storeArticle']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
