<?php

use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Admin\FrontendTheme\AddTheme as FrontendThemeAddTheme;
use App\Http\Livewire\Admin\FrontendTheme\IndexTheme as FrontendThemeIndexTheme;
use App\Http\Livewire\Admin\Page\AddPage;
use App\Http\Livewire\Admin\Page\IndexPage;
use App\Http\Livewire\Admin\Permission\AddPermission;
use App\Http\Livewire\Admin\Permission\IndexPermission;
use App\Http\Livewire\Admin\Post\AddPost;
use App\Http\Livewire\Admin\Post\IndexPost;
use App\Http\Livewire\Admin\Role\AddRole;
use App\Http\Livewire\Admin\Role\IndexRole;
use App\Http\Livewire\Admin\Setting\AddSetting;
use App\Http\Livewire\Admin\Setting\IndexSetting;
use App\Http\Livewire\Admin\Theme\AddTheme;
use App\Http\Livewire\Admin\Theme\IndexTheme;
use App\Http\Livewire\Admin\User\AddUser;
use App\Http\Livewire\Admin\User\IndexUser;
use App\Http\Livewire\Admin\Widget\AddWidget;
use App\Http\Livewire\Admin\Widget\IndexWidget;
use App\Http\Livewire\Frontend\Theme\Aboutus;
use App\Http\Livewire\Frontend\Theme\Blog;
use App\Http\Livewire\Frontend\Theme\BlogDetail;
use App\Http\Livewire\Frontend\Theme\Contactus;
use App\Http\Livewire\Frontend\theme\homepage;
use App\Http\Livewire\Frontend\Theme\Portfolio;
use App\Http\Livewire\Frontend\Theme\PortfolioDetail;
use App\Http\Livewire\Frontend\Theme\Service;
use App\Http\Livewire\Frontend\Theme\ServiceDetail;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', homepage::class);
Route::get('/service', Service::class);
Route::get('/service/{slug}-{slug2?}', ServiceDetail::class);
Route::get('/portfolio', Portfolio::class);
Route::get('/portfolio/{slug}', PortfolioDetail::class);
Route::get('/blog', Blog::class);
Route::get('/blog/{slug}', BlogDetail::class);
Route::get('/aboutus', Aboutus::class);
Route::get('/contactus', Contactus::class);

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', Dashboard::class);
        Route::get('dashboard', Dashboard::class);
        Route::prefix('pages')->group(function () {
            Route::get('/', IndexPage::class);
            Route::get('/create', AddPage::class);
        });
        Route::prefix('posts')->group(function () {
            Route::get('/', IndexPost::class);
            Route::get('/create', AddPost::class);
        });
        Route::prefix('widgets')->group(function () {
            Route::get('/', IndexWidget::class);
            Route::get('/create', AddWidget::class);
        });
        Route::prefix('themes')->group(function () {
            Route::get('/', IndexTheme::class);
            Route::get('/create', AddTheme::class);
            Route::get('/frontend', FrontendThemeIndexTheme::class);
            Route::get('/frontend/create', FrontendThemeAddTheme::class);
        });
        Route::prefix('settings')->group(function () {
            Route::get('/', IndexSetting::class);
            Route::get('/create', AddSetting::class);
            Route::get('/user', IndexUser::class);
            Route::get('/user/create', AddUser::class);
            Route::get('/role', IndexRole::class);
            Route::get('/role/create', AddRole::class);
            Route::get('/permission', IndexPermission::class);
            Route::get('/permission/create', AddPermission::class);
        });
    });
});
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
