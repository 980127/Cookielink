<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AnalyticsController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('welcome');
})->name('/');

Route::get('home', [HomeController::class, 'index'])->name('home');
Route::resource('analytics', AnalyticsController::class)->only(['index']);
Route::get('account', [AccountController::class, 'index'])->name('account.index');
Route::get('account/appearance', [AccountController::class, 'appearance'])->name('account.appearance');
Route::get('account/settings', [AccountController::class, 'settings'])->name('account.settings');
Route::get('account/feedback', [AccountController::class, 'feedback'])->name('account.feedback');
Route::get('account/flynn', [AccountController::class, 'show_profile']);
Route::resource('employee', EmployeeController::class)->only(['index', 'store', 'update', 'destroy']);


require __DIR__.'/auth.php';
