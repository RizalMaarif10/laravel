<?php


use App\Http\Controllers\InputController;
use App\Http\Controllers\InputMerchController;
use App\Http\Controllers\HasilController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MerchantController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\UpdateMerchController;
use App\Http\Controllers\ProfileController;
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

Route::get('/index', [HasilController::class, 'hasil'])->name('tampilan.hasil');
Route::get('/index/admin', [AdminController::class, 'admin'])->name('tampilan.admin');
Route::post('/index/admin', [AdminController::class, 'store'])->name('tampilan.admin');
Route::get('/index/delete{id}', [AdminController::class, 'delete'])->name('tampilan.admin.delete');
Route::post('/index/update/{id}', [AdminController::class, 'update'])->name('tampilan.admin.update');
Route::get('/index/update{id}', [UpdateController::class, 'update'])->name('tampilan.update');

Route::get('/index/input', [InputController::class, 'form'])->name('tampilan.input');
Route::get('/index/profile', [AdminController::class, 'profile'])->name('tampilan.profile');


Route::get('/index/merchant', [MerchantController::class, 'merchant'])->name('tampilan.merchant');
Route::post('/index/merchant', [MerchantController::class, 'store'])->name('tampilan.merchant');

Route::get('/index/merchant/input', [InputMerchController::class, 'form'])->name('tampilan.input.merch');
Route::get('/indexmerchant//delete{id}', [MerchantController::class, 'delete'])->name('tampilan.merch.delete');

Route::post('/index/merchant/update/{id}', [MerchantController::class, 'update'])->name('tampilan.merch.update');
Route::get('/index/merchant/update{id}', [UpdateMerchController::class, 'update'])->name('tampilan.update');
