<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/Home', [HomeController::class, 'Home']);
route::get('/', [HomeController::class, 'index']);
route::get('/contactus', [HomeController::class, 'contactus']);
route::get('/aboutus', [HomeController::class, 'aboutus']);
route::get('/site_setting', [AdminController::class, 'site_setting']);
route::Put('/Update_setting', [AdminController::class, 'Update_setting']);

#slider
route::post('/Slideruploud', [AdminController::class, 'Slideruploud']);
route::get('/Slider', [AdminController::class, 'Slider']);
route::get('/delete-Slider/{id}', [AdminController::class, 'delete_Slider']);
route::get('/edit-slider/{id}', [AdminController::class, 'edit_slider']);
route::Put('/Update_slider', [AdminController::class, 'Update_slider']);


#product
route::get('/adminproduct', [AdminController::class, 'adminproduct']);
route::post('/Upload_Product', [AdminController::class, 'Upload_Product']);
route::get('/all_product', [AdminController::class, 'all_products']);
route::get('/AllProducts', [HomeController::class, 'AllProducts']);
route::get('/delete-pro/{id}', [AdminController::class, 'deletepro']);
route::get('/edit-pro/{id}', [AdminController::class, 'edit_product']);
route::get('/view_product/{slug}', [HomeController::class, 'view_product']);
route::get('/Products/{slug}', [HomeController::class, 'Products']);
route::Put('/Update_Product/{id}', [AdminController::class, 'Update_Product']);






#category
route::get('/AdminCategories', [AdminController::class, 'AdminCategories']);
route::post('/createcatagory', [AdminController::class, 'createcatagory']);
route::get('/edit-cat/{id}', [AdminController::class, 'editcatagory']);
route::Put('/update-cat/{id}', [AdminController::class, 'updatecatagory']);
route::get('/delete-cat/{id}', [AdminController::class, 'deletcatagory']);
route::get('/Categories', [HomeController::class, 'Categories']);


#brand
route::get('/adminbrand', [AdminController::class, 'adminbrand']);
route::post('/createbrand', [AdminController::class, 'createbrand']);
route::get('/deletebrand/{id}', [AdminController::class, 'deletebrand']);
route::get('/edit_brand/{id}', [AdminController::class, 'edit_brand']);
route::Put('/Update_brand/{id}', [AdminController::class, 'Update_brand']);
route::get('/brands/{slug}', [HomeController::class, 'brands']);



Route::get('/checkout', [HomeController::class, 'checkout']);

#search
route::get('/search', [HomeController::class, 'search']);

route::get('/destroy/{id}', [HomeController::class, 'destroy']);

route::get('/wishlistpage', [HomeController::class, 'wishlistpage']);

Route::resource('/wishlist', HomeController::class, ['except' => ['create', 'edit', 'show', 'update']]);

route::post('/makeorder', [HomeController::class, 'makeorder']);

route::post('/addcart/{id}', [HomeController::class, 'addcart']);

route::get  ('/destroyitemcart/{id}', [HomeController::class, 'destroyitemcart']);

route::get('showcart/', [HomeController::class, 'showcart']);


