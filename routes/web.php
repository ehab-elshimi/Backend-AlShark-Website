<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryProductController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\EmailsController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\Auth\LoginController;


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




// Auth::routes();
Route::group(['prefix'=>'admin/'],function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login'])->name('login');
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

});
Route::group(['prefix'=>'admin/','middleware'=>['admin']],function () {
    Route::get('dashboard', [HomeController::class, 'dashboard'])->name('home');
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
    Route::resource('categoryproduct', CategoryProductController::class);
    Route::resource('team', TeamController::class);
    Route::resource('emails', EmailsController::class);
    Route::get('admin-view', [HomeController::class, 'adminView'])->name('admin.view');

});

Route::group(['prefix'=>'','middleware'=>['auth']],function(){
    Route::get('/', [WebsiteController::class, 'home'])->name('website.home');
    Route::get('/history', [WebsiteController::class, 'history'])->name('website.history');
    Route::get('/products', [WebsiteController::class, 'products'])->name('website.products');
    Route::get('/product-details', [WebsiteController::class, 'product_details'])->name('website.product_details');
    Route::get('/steam-distillation', [WebsiteController::class, 'steam_distillation'])->name('website.steam_distillation');
    Route::get('/partners', [WebsiteController::class, 'partners'])->name('website.partners');
    Route::get('/certificates', [WebsiteController::class, 'certificates'])->name('website.certificates');
    Route::get('/gallery', [WebsiteController::class, 'gallery'])->name('website.gallery');
    Route::get('/news', [WebsiteController::class, 'news'])->name('website.news');
    Route::get('/contact', [WebsiteController::class, 'contact'])->name('website.contact');
});
