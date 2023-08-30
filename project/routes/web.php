<?php

use App\Http\Controllers\PageController;
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

Route::post('auth', [PageController::class, 'login'])->name('login');
Route::post('logout', [PageController::class, 'logout'])->name('logout');

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('about-us', [PageController::class, 'about'])->name('about');

Route::get('instances-et-organes', [PageController::class, 'instance'])->name('instances');

Route::get('contactez-nous', [PageController::class, 'contact'])->name('contact');

Route::get('nos-activités', [PageController::class, 'activite'])->name('activite');
