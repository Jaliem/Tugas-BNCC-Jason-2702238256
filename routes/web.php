<?php

use App\Http\Controllers\datacontroller;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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


Route::get('',[datacontroller::class, 'login']);
Route::get('add_barang', function () {
    return view('addbarang');
});
Route::get('view_barang',[datacontroller::class, 'view_barang']);
Route::get('view_keranjang',[datacontroller::class, 'view_keranjang']);
Route::get('registers',[datacontroller::class, 'view_register']);
Route::post('store_barang',[datacontroller::class, 'store_barang'])->name('store_barang');
Route::post('store_register',[datacontroller::class, 'store_register'])->name('store_register');
Route::post('store_keranjang',[datacontroller::class, 'keranjang'])->name('keranjang');
Route::post('store_login',[datacontroller::class, 'store_login'])->name('store_login');


// Route for deleting a product
Route::delete('hapus_barang/{id}', [datacontroller::class, 'delete'])->name('delete_barang');

// Route for updating a product
Route::patch('update_barang/{id}', [datacontroller::class, 'update'])->name('update_barang');
Route::get('view_update',[datacontroller::class, 'view_update']);

Auth::routes();

