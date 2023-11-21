<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdmimController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
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
    Route::delete('remove-from-cart', [CartController::class, 'remove'])->name('remove_from_cart');
    Route::patch('update-cart', [CartController::class, 'update'])->name('shop_cart.update_cart');
    Route::get('/shop_cart', [CartController::class, 'shopCart'])->name('shop_cart.shop_cart');
    Route::get('/check-out', [CartController::class, 'checkOut'])->name('shop_cart.check-out');
    Route::post('/bill_done', [CartController::class, 'doneBill'])->name('shop_cart.donebill');
    Route::get('/add_to_cart/{id}', [CartController::class, 'addToCard'])->name('shop_cart.add_to_cart');
    Route::post('/add_cart/{id}', [CartController::class, 'addCart'])->name('shop_cart.add_cart');


    route::resource('account', AccountController::class);
    route::get('/order', [OrderController::class, 'index'])->name('order.index');
    route::delete('/order/{id}', [OrderController::class, 'destroy'])->name('order.destroy');


    Route::resource('/admin', AdmimController::class);
    Route::get('/filemaneger', [AdmimController::class, 'filemaneger'])->name('admin.filemaneger');
    Route::resource('/categories', CategoriesController::class);

    Route::resource('/contact', ContactController::class);

    Route::resource('/products', ProductController::class);
    Route::post('/deleteImage', [ProductController::class, 'deleteImage'])->name('products.deleteImage');
    Route::get('/changeImage/{id}', [ProductController::class, 'changeImage'])->name('products.changeImage');

    Route::get('/invoices/{id}', [AdmimController::class, 'invoices'])->name('admin.invoices');

    Route::resource('/sendmail', SendEmail::class);
    Route::resource('/customer', CustomerController::class);

    Route::get('/detailBill/{id}', [AccountController::class, 'detailBill'])->name('account.detailBill');

    Route::get('/fix/{id}', [CustomerController::class, 'fix'])->name('customer.fix');
    Route::get('/updateUser/{id}', [CustomerController::class, 'updateUser'])->name('customer.updateUser');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
