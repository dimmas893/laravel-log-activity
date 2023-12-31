<?php

use App\Http\Controllers\HomeController;
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

Route::get('add-to-log', [HomeController::class, 'myTestAddToLog']);
Route::get('logActivity', [HomeController::class, 'logActivity']);
Route::get('/logActivity/{id}', [HomeController::class, 'delete'])->name('delete');
