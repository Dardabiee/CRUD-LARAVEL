<?php

use App\Http\Controllers\PembeliController;
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

Route::get('/add', function () {
    return view('add');
});

Route::get('/table',[PembeliController::class, 'index']);

Route::get('/add',[PembeliController::class, 'create']);

Route::post('/store',[PembeliController::class, 'store']);

Route::get('/{id}/edit',[PembeliController::class, 'edit']);

Route::put('update/{edit}',[PembeliController::class, 'update']);

Route::delete('update/{edit}',[PembeliController::class, 'destroy']);