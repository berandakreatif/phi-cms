<?php

use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Admin\Page\AddPage;
use App\Http\Livewire\Admin\Page\IndexPage;
use App\Http\Livewire\Admin\Post\AddPost;
use App\Http\Livewire\Admin\Post\IndexPost;
use App\Http\Livewire\Admin\Setting\AddSetting;
use App\Http\Livewire\Admin\Setting\IndexSetting;
use App\Http\Livewire\Admin\Widget\AddWidget;
use App\Http\Livewire\Admin\Widget\IndexWidget;
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
        Route::prefix('pages')->group(function () {
            Route::get('/', IndexPage::class);
            Route::get('create', AddPage::class);
        });
        Route::prefix('posts')->group(function () {
            Route::get('/', IndexPost::class);
            Route::get('create', AddPost::class);
        });
        Route::prefix('widgets')->group(function () {
            Route::get('/', IndexWidget::class);
            Route::get('create', AddWidget::class);
        });
        Route::prefix('settings')->group(function () {
            Route::get('/', IndexSetting::class);
            Route::get('create', AddSetting::class);
        });
    });
});
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
