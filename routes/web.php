<?php

use App\Http\Controllers\HomeClients;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeContacts;
use App\Http\Controllers\HomePortfolio;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\BudayaKerjaController;
use App\Models\Contact;

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

Route::get('/', [HomePageController::class, 'index']);
Route::get('/portfolio-detail/{id}', [HomePageController::class, 'portfolio']);
Route::get('/blog-detail/{id}', [HomePageController::class, 'blog']);
Route::get('/blogs', [HomePageController::class, 'blogs']);
Route::get('/portfolio', [HomePageController::class, 'portfolios']);
Route::post('/send', [ContactController::class, 'send'])->name('send.email');



Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);


Route::middleware('auth')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::post('/logout', [LoginController::class, 'logout']);
    Route::resource('/dashboard/about-us', AboutUsController::class);
    Route::get('/dashboard/about-us/{id}/confirm', [AboutUsController::class, 'confirm']);
    Route::get('/dashboard/about-us/{id}/destroy', [AboutUsController::class, 'destroy']);

    Route::resource('/dashboard/our-client', ClientController::class);
    Route::get('/dashboard/our-client{id}/confirm', [ClientController::class, 'confirm']);
    Route::get('/dashboard/our-client{id}/destroy', [ClientController::class, 'destroy']);

    Route::resource('/dashboard/portfolio', PortfolioController::class);
    Route::get('/dashboard/portfolio/{id}/confirm', [PortfolioController::class, 'confirm']);
    Route::get('/dashboard/portfolio/{id}/destroy', [PortfolioController::class, 'destroy']);

    Route::resource('/dashboard/budayakerja', BudayaKerjaController::class);
    Route::get('/dashboard/budayakerja/{id}/confirm', [BudayaKerjaController::class, 'confirm']);
    Route::get('/dashboard/budayakerja/{id}/destroy', [BudayaKerjaController::class, 'destroy']);

    Route::resource('/dashboard/blog', BlogController::class);
    Route::get('/dashboard/blog/{id}/confirm', [BlogController::class, 'confirm']);
    Route::get('/dashboard/blog/{id}/destroy', [BlogController::class, 'destroy']);

    Route::resource('/dashboard/contact', ContactController::class);
    Route::get('/dashboard/contact/{id}/confirm', [ContactController::class, 'confirm']);
    Route::get('/dashboard/contact/{id}/destroy', [ContactController::class, 'destroy']);

    Route::resource('/dashboard/user', UserController::class);

});