<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\Login;
use App\Http\Controllers\Admin\Signup;
use App\Http\Controllers\Cart;
use App\Http\Controllers\Home;

use App\Http\Controllers\Product_detail;
use App\Http\Controllers\Search;
use App\Http\Controllers\Shop;
// use App\Models\Admin\Category;
// use App\Models\login;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [Home::class, 'home']);
Route::get('/cart', [Cart::class, 'cart']);
Route::get('/shop', [Shop::class, 'shop']);


Route::middleware(['checkUser'])->group(function () {
    Route::post('/addcategory', [CategoryController::class, 'category_insert_data']);
    Route::get('/addcategory', [CategoryController::class, 'category']);
    Route::get('/viewcategory', [CategoryController::class, 'category_select_data']);
    Route::get('/delete/{id}', [CategoryController::class, 'delete_category']);
    Route::get('/edit/{id}', [CategoryController::class, 'edit']);
    Route::post('/update/{id}', [CategoryController::class, 'update']);



    Route::post('/addproduct', [CategoryController::class, 'product_insert_data']);
    Route::get('/addproduct', [CategoryController::class, 'product']);
    Route::get('/viewproduct', [CategoryController::class, 'viewproduct']);
    Route::get('/product/delete/{id}', [CategoryController::class, 'delete_product']);
    Route::get('/product/edit/{id}', [CategoryController::class, 'edit_product']);
    Route::post('/product/update/{id}', [CategoryController::class, 'update_product']);
});





Route::get('/category/{slugurl}', [Shop::class, 'category_filter']);
Route::get('/product/{slugurl}', [Product_detail::class, 'product_detail']);
Route::get('/search', [Search::class, 'search']);

Route::post('/login', [Login::class, 'login_auth']);
Route::get('/login', [Login::class, 'login_view']);

Route::get('/signup', [Signup::class, 'signup_view']);
Route::post('/signup', [Signup::class, 'signup']);
























// Route::prefix('admin')
//     ->middleware(['checkUser'])
//     ->group(function () {

//         // Dashboard
//         Route::get('/dashboard', function () {
//             return view('admin.dashboard');
//         });

//         /*
//         |--------------------------------------------------------------------------
//         | Category Routes
//         |--------------------------------------------------------------------------
//         */
//         Route::prefix('categories')->group(function () {
//             Route::get('/', [CategoryController::class, 'index']);
//             Route::get('/create', [CategoryController::class, 'create']);
//             Route::post('/store', [CategoryController::class, 'store']);
//             Route::get('/edit/{id}', [CategoryController::class, 'edit']);
//             Route::post('/update/{id}', [CategoryController::class, 'update']);
//             Route::get('/delete/{id}', [CategoryController::class, 'delete']);
//         });

//         /*
//         |--------------------------------------------------------------------------
//         | Product Routes
//         |--------------------------------------------------------------------------
//         */
//         Route::prefix('products')->group(function () {
//             Route::get('/', [ProductController::class, 'index']);
//             Route::get('/create', [ProductController::class, 'create']);
//             Route::post('/store', [ProductController::class, 'store']);
//             Route::get('/edit/{id}', [ProductController::class, 'edit']);
//             Route::post('/update/{id}', [ProductController::class, 'update']);
//             Route::get('/delete/{id}', [ProductController::class, 'delete']);
//         });
    // });
