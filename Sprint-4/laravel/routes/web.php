<?php

use App\Admin;
use App\Http\Controllers\AdminController;
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

//Universal Login and Member Registration and logout
Route::get('/login', [AdminController::class, 'login'])
->name('admin.login');

Route::post('/login', [AdminController::class, 'login'])
->name('admin.postLogin');

Route::get('/register', [AdminController::class, 'register'])
->name('admin.register');

Route::post('/register', [AdminController::class, 'register'])
->name('admin.postRegister');

Route::get('/logout', [AdminController::class, 'logout'])
->name('admin.logout');

//Admin Route
Route::middleware('login.check')->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);

    Route::get('/admin/dashboard', [AdminController::class, 'index'])
    ->name('admin.dashboard');

    Route::get('/admin/artikel', [AdminController::class, 'artikel'])
    ->name('admin.artikel');

    route::get('/admin/artikel/input', [AdminController::class, 'artikelInput'])
    ->name('admin.artikel.Input');

    route::post('admin/artikel/input', [AdminController::class, 'artikelInput'])
    ->name('admin.artikel.postInput');

    route::get('/admin/artikel/edit/{id}', [AdminController::class, 'artikelInput'])
    ->name('admin.artikel.edit');

    route::patch('/admin/artikel/edit/{id}', [AdminController::class, 'artikelUpdate'])
    ->name('admin.artikel.postEdit');

    route::delete('/admin/artikel/delete/{id}', [AdminController::class, 'artikelDelete'])
    ->name('admin.artikel.delete');
});