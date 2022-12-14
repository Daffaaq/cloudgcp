<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TableController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PromoController;

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
    return redirect('login');
});

Auth::routes();

Route::get('/mysql', function () {
    Artisan::call('migrate:rollback', ['--force' => true]);
    Artisan::call('migrate', ['--force' => true]);
    Artisan::call('db:seed', ['--force' => true]);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['auth']], function() {
    Route::resource('tables', TableController::class);
    Route::prefix('menu')->group(function () {
        Route::resource('daftar_menu', MenuController::class);
        Route::resource('categories', CategoryController::class);
    });
    Route::resource('promo', PromoController::class);
});

Route::get('/mig', function()
{
    // Call and Artisan command from within your application.
    Artisan::call('migrate:fresh');
    Artisan::call('db:seed');
});

Route::get('/cc', function()
{
    // Call and Artisan command from within your application.
    Artisan::call('config:clear');
});