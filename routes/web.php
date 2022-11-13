<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryProductController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\EmailsController;
use App\Http\Controllers\WebsiteController;
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



require __DIR__.'/auth.php';
Route::get('dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::group(['prefix'=>'admin/','middleware'=>['auth', 'verified']],function () {
    Route::get('/', [AdminController::class, 'index'])->name('dashboard.home');
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
    Route::resource('categoryproduct', CategoryProductController::class);
    Route::get('show-category/{category}', [CategoryController::class, 'show_category'])->name('categories.showcategory');
    Route::get('show-product/{product}', [ProductController::class, 'show_product'])->name('products.showproduct');
    Route::resource('team', TeamController::class);
    Route::resource('emails', EmailsController::class);
});

Route::group(['prefix'=>''],function(){
    Route::get('/', [WebsiteController::class, 'home'])->name('website.home');
    Route::get('/history', [WebsiteController::class, 'history'])->name('website.history');
    Route::get('/products', [WebsiteController::class, 'products'])->name('website.products');
    Route::get('/steam-distillation/{category}', [WebsiteController::class, 'steam_distillation'])->name('website.steam_distillation');
    Route::get('/product-details/{id?}', [WebsiteController::class, 'product_details'])->name('website.product_details');
    Route::get('/partners', [WebsiteController::class, 'partners'])->name('website.partners');
    Route::get('/certificates', [WebsiteController::class, 'certificates'])->name('website.certificates');
    Route::get('/gallery', [WebsiteController::class, 'gallery'])->name('website.gallery');
    Route::get('/news', [WebsiteController::class, 'news'])->name('website.news');
    Route::get('/contact', [WebsiteController::class, 'contact'])->name('website.contact');
    Route::post('/send-email', [EmailController::class, 'sendEmail'])->name('email.send');
});
