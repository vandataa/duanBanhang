<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdmimController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SendEmail;
use App\Http\Controllers\ShopController;
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

Route::get('/', function () {
    return view('index');
});




    Route::get('/shop', [ShopController::class, 'shop'])->name('shop.shop');
    Route::get('/shop/{id}', [ShopController::class, 'shopsame'])->name('shop.shopsame');
    Route::get('/detail/{id}', [ShopController::class, 'detail'])->name('shop.detail');


Route::group(['middleware' => 'guest'], function () {
    Route::get('/resign', [AuthController::class, 'resign'])->name('resign');
    Route::post('/resign', [AuthController::class, 'resignPost'])->name('resign');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
    Route::get('/foget', [AuthController::class, 'foget'])->name('foget');
    Route::post('/foget', [AuthController::class, 'getPass'])->name('foget');
    Route::get('/newpass/{token}', [AuthController::class, 'newPass'])->name('password');
    Route::post('/newpass', [AuthController::class, 'newPassPost'])->name('password');

});
Route::group(['middleware' => 'auth'], function () {
    route::resource('account', AccountController::class);
    Route::resource('/admin', AdmimController::class);
    Route::resource('/categories', CategoriesController::class);
    Route::resource('/contact', ContactController::class);
    Route::resource('/products', ProductController::class);
    Route::resource('/sendmail', SendEmail::class);
    Route::resource('/customer', CustomerController::class);
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
