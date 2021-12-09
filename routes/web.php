<?php

use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Admin\Page\AddPage;
use App\Http\Livewire\Admin\Page\IndexPage;
use App\Http\Livewire\Admin\Post\AddPost;
use App\Http\Livewire\Admin\Post\IndexPost;
use App\Http\Livewire\Admin\Settings;
use App\Http\Livewire\Admin\Widgets;
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

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', Dashboard::class);
        Route::get('dashboard', Dashboard::class);
        Route::get('pages', IndexPage::class);
        Route::get('pages/create', AddPage::class);
        Route::get('posts', IndexPost::class);
        Route::get('posts/create', AddPost::class);
        Route::get('settings', Settings::class);
        Route::get('widgets', Widgets::class);
    });
});
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
