<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CountController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\AboutController;
use App\Http\Controllers\Web\WebBlogController;
use App\Http\Controllers\Web\WebOutletController;
use App\Http\Controllers\Web\WebContactController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/outlets', [WebOutletController::class, 'index'])->name('outlets');
Route::get('/blogs', [WebBlogController::class, 'index'])->name('blogs');
Route::get('/contacts', [WebContactController::class, 'index'])->name('contacts');
Route::get('/outlets-detail/{outlet}', [WebOutletController::class, 'outletDetailPage'])->name('outlet-detail');
Route::get('/blog-detail/{blog}', [WebBlogController::class, 'blogDetailPage'])->name('blog-detail');
Route::post('/store-enquiry', [EnquiryController::class, 'store'])->name('store-enquiry');
Route::post('/send-mail', [ContactController::class, 'sendMail'])->name('send-mail');

Auth::routes();

Route::get('/forgot-password', 'App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('/forgot-password', 'App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('/reset-password/{token}', [App\Http\Controllers\Auth\ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [App\Http\Controllers\Auth\ResetPasswordController::class, 'reset'])->name('password.update');

Route::post('/do-login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('admin.do-login');

Route::group(['middleware' => ['auth:admin']], function () {
    Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('admin.logout');
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('admin.dashboard');

    Route::group(['prefix' => 'outlet', 'namespace' => 'Outlet', 'as' => 'outlet.'], function () {
        Route::get('/', [OutletController::class, 'index'])->name('index');
        Route::get('/create', [OutletController::class, 'create'])->name('create');
        Route::post('/store', [OutletController::class, 'store'])->name('store');
        Route::get('/edit/{outlet}', [OutletController::class, 'edit'])->name('edit');
        Route::post('/update/{outlet}', [OutletController::class, 'update'])->name('update');
        Route::delete('/delete/{outlet}', [OutletController::class, 'delete'])->name('delete');
    });

    Route::group(['prefix' => 'blog', 'namespace' => 'Blog', 'as' => 'blog.'], function () {
        Route::get('/', [BlogController::class, 'index'])->name('index');
        Route::get('/create', [BlogController::class, 'create'])->name('create');
        Route::post('/store', [BlogController::class, 'store'])->name('store');
        Route::get('/edit/{blog}', [BlogController::class, 'edit'])->name('edit');
        Route::post('/update/{blog}', [BlogController::class, 'update'])->name('update');
        Route::delete('/delete/{blog}', [BlogController::class, 'delete'])->name('delete');
    });

    Route::group(['prefix' => 'partner', 'namespace' => 'Partner', 'as' => 'partner.'], function () {
        Route::get('/create', [PartnerController::class, 'index'])->name('index');
        Route::post('/store', [PartnerController::class, 'store'])->name('store');
        Route::delete('/delete/{partner}', [PartnerController::class, 'delete'])->name('delete');
    });

    Route::group(['prefix' => 'count', 'namespace' => 'Count', 'as' => 'count.'], function () {
        Route::get('/create', [CountController::class, 'create'])->name('create');
        Route::post('/update/{count}', [CountController::class, 'update'])->name('update');
    });

    Route::group(['prefix' => 'enquiry', 'namespace' => 'Enquiry', 'as' => 'enquiry.'], function () {
        Route::get('/', [EnquiryController::class, 'index'])->name('index');
        Route::delete('/delete/{enquiry}', [EnquiryController::class, 'delete'])->name('delete');
    });

    Route::group(['prefix' => 'contact', 'namespace' => 'Contact', 'as' => 'contact.'], function () {
        Route::get('/', [ContactController::class, 'index'])->name('index');
        Route::delete('/delete/{contact}', [ContactController::class, 'delete'])->name('delete');
    });
});
