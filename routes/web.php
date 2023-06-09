<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/admin', [DashboardController::class, 'index'])->name('admin.dashboard');

Route::get('/admin/posts', [PostController::class, 'index'])->name('admin.post.index');
Route::get('/admin/posts/create', [PostController::class, 'create'])->name('admin.post.create');