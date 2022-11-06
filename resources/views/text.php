php artisan make:controller CategoryController -r
php artisan make:controller ProductController -r
php artisan make:controller CategoryProductController -r
php artisan make:controller TeamController -r
php artisan make:controller EmailsController -r
php artisan make:controller WebsiteController -r

php artisan make:model Category -m
php artisan make:model Product -m
php artisan make:model CategoryProduct -m
php artisan make:model Team -m
php artisan make:model Emails -m



// Category
protected $fillable = [
    'name',
    'desc'
];



// Product
protected $fillable = [
    'session',
    'name',
    'image',
    'desc',
    'application',
    'main-components',
    'blends-with',
    'cautions',
    'cas-tsca',
    'cas-eninces'
];



// CategoryProduct
protected $fillable = [
    'category_id',
    'product_id'
];



// Team
protected $fillable = [
    'name',
    'job_title',
    'image'
];



// Emails
protected $fillable = [
    'first_name',
    'last_name',
    'company_name',
    'phone_number',
    'email',
    'message'
];


// Category
$table->string('name');
$table->string('desc');

// Product
$table->string('session');
$table->string('name');
$table->string('image');
$table->text('desc');
$table->text('application');
$table->text('main-components');
$table->text('blends-with');
$table->text('cautions');
$table->string('cas-tsca');
$table->string('cas-eninces');

// CategoryProduct
$table->string('category_id');
$table->string('product_id');

// Team
$table->string('name');
$table->string('job_title');
$table->string('image');


// Emails
$table->string('first_name');
$table->string('last_name');
$table->string('company_name');
$table->string('phone_number');
$table->string('email');
$table->text('message');


use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryProductController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\EmailsController;
use App\Http\Controllers\Admin\WebsiteController;

Route::group(['namespace'=>'Admin','prefix'=>'admin','middleware'=>'auth',function(){
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
    Route::resource('categoryproduct', CategoryProductController::class);
    Route::resource('team', TeamController::class);
    Route::resource('emails', EmailsController::class);
    Route::resource('website', WebsiteController::class);
}]);





//  views
dashboard

--->pages
---------->categories
----------------->index.blade.php
----------------->edit.blade.php

---------->products
----------------->index.blade.php
----------------->edit.blade.php
----------------->create.blade.php
----------------->show.blade.php

---------->emails
----------------->index.blade.php
----------------->show.blade.php

---------->team
----------------->index.blade.php
----------------->edit.blade.php

---------->categoryproduct
----------------->index.blade.php
----------------->edit.blade.php
----------------->create.blade.php

---->includes
------------------>header.blade.php
------------------>sidebar.blade.php
------------------>footer.blade.php
------------------>scripts.blade.php


website

--->pages
---------->categories
----------------->index
----------------->edit

---------->products
----------------->index
----------------->edit
----------------->create
----------------->show

---------->emails
----------------->index
----------------->show

---------->team
----------------->index
----------------->edit

---------->categoryproduct
----------------->index
----------------->edit
----------------->create

---->includes
------------------>header
------------------>sidebar
------------------>footer
------------------>scripts

// public
---->assets/dashboard


---->assets/website
------------>images
------------>css
------------>js
------------>video

dashboard.pages..index
dashboard.pages..edit
dashboard.pages..create
dashboard.pages..show

return view('dashboard.pages..index');
return view('dashboard.pages..edit');
return view('dashboard.pages..create');
return view('dashboard.pages..show');

return view('dashboard.pages.categories.index');
return view('dashboard.pages.categories.edit');

return view('dashboard.pages.products.index');
return view('dashboard.pages.products.edit');
return view('dashboard.pages.products.create');
return view('dashboard.pages.products.show');

return view('dashboard.pages.categoryproduct.index');
return view('dashboard.pages.categoryproduct.edit');

return view('dashboard.pages.emails.index');
return view('dashboard.pages.emails.show');

return view('dashboard.pages.team.index');
return view('dashboard.pages.team.edit');



home.blade.php
history.blade.php
products.blade.php
product_details.blade.php
steam/steam_distillation.blade.php
partners.blade.php
certificates.blade.php
gallery.blade.php
news.blade.php
contact.blade.php

return view('website.pages.home');
return view('website.pages.history');
return view('website.pages.products');
return view('website.pages.product_details');
return view('website.pages.steam_distillation');
return view('website.pages.partners');
return view('website.pages.certificates');
return view('website.pages.gallery');
return view('website.pages.news');
return view('website.pages.contact');




