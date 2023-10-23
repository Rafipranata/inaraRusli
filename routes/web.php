<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\CatalogController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\DashboardController;

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



Route::get('/', [HomeController::class, 'Home'])->name('home');

Route::get('/about', [HomeController::class, 'About'])->name('about');

Route::get('/katalog', [HomeController::class, 'Catalog'])->name('katalog');

Route::get('/gallery', [HomeController::class, 'Gallery'])->name('gallery');


Route::get('/contact', [HomeController::class, 'Contact'])->name('contact');


Route::post('/loginproses', [LoginController::class, 'loginproses']  )->name('loginproses');



Route::get('/logout', [LoginController::class, 'logout']  )->name('logout');

Route::get('admin/login', function () {
    return view('Admin.login');
})->name('login');

Route::name('admin.')->prefix('admin')->middleware('auth')->group(function () {
    
    Route::get('home',[DashboardController::class, 'index'])->name('index');
    
    Route::get('/tambahCarousel', [DashboardController::class, 'tambahCarousel'])->name('tambahCarousel');

    Route::post('/insertCarousel', [DashboardController::class, 'insertCarousel'])->name('insertCarousel');

    Route::get('/deleteCarousel/{id}', [DashboardController::class, 'deleteCarousel'])->name('deleteCarousel');

    Route::get('/ubahCarousel/{id}', [DashboardController::class, 'ubahCarousel'])->name('ubahCarousel');

    Route::post('/updateCarousel/{id}', [DashboardController::class, 'updateCarousel'])->name('updateCarousel');

    Route::post('/updateAbout/{id}', [DashboardController::class, 'updateAbout'])->name('updateAbout ');
    
    
    // Controller About
    Route::get('/about', [AboutController::class, 'about'])->name('about');
    
    Route::get('/tambahAbout', [AboutController::class, 'tambahAbout'])->name('tambahAbout');
    
    Route::get('/detailAbout/{id}', [AboutController::class, 'detailAbout'])->name('detailAbout');

    Route::get('/ubahAbout/{id}', [AboutController::class, 'ubahAbout'])->name('ubahAbout');

    Route::post('/updateAbout/{id}', [AboutController::class, 'updateAbout'])->name('updateAbout');

    Route::get('/deleteAbout/{id}', [AboutController::class, 'deleteAbout'])->name('deleteAbout');

    Route::post('/insertAbout', [AboutController::class, 'insertAbout'])->name('insertAbout');



    // About End

    
    // Controller Gallery
    
    Route::get('/gallery', [GalleryController::class, 'gallery'])->name('gallery');

    Route::get('/tambahGallery', [GalleryController::class, 'tambahGallery'])->name('tambahGallery');

    Route::post('/insertGallery', [GalleryController::class, 'insertGallery'])->name('insertGallery');
    
    Route::get('/ubahGallery/{id}', [GalleryController::class, 'ubahGallery'])->name('ubahGallery');
    
    Route::post('/updateGallery/{id}', [GalleryController::class, 'updateGallery'])->name('updateGallery');
    
    Route::get('/deleteGallery/{id}', [GalleryController::class, 'deleteGallery'])->name('deleteGallery');
    
    // End Gallery
    
    // Controller Contact
    Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
    
    Route::post('/updateContact', [ContactController::class, 'updateContact'])->name('updateContact');
    
    
    // Contact end
    

    //Controller Catalog 

    Route::get('/catalog', [CatalogController::class, 'catalog'])->name('catalog');

    Route::get('/tambahProduk', [CatalogController::class, 'tambahProduk'])->name('tambahProduk');
    
    Route::post('/insertCatalog', [CatalogController::class, 'insertCatalog'])->name('insertCatalog');

    Route::get('/deleteCatalog/{id}', [CatalogController::class, 'deleteCatalog'])->name('deleteCatalog');

    Route::get('/lihatCatalog/{id}', [CatalogController::class, 'lihatCatalog'])->name('lihatCatalog');

    Route::post('/updateCatalog/{id}', [CatalogController::class, 'updateCatalog'])->name('updateCatalog');

    Route::post('/insertKategori', [CatalogController::class, 'insertKategori'])->name('insertKategori');
    
    Route::get('/deleteKategori/{id}', [CatalogController::class, 'deleteKategori'])->name('deleteKategori');

    // End Controller Catalog

    // Profile
    
    Route::get('/profile', [UserController::class, 'profile']  )->name('profile');

    Route::post('/insertprofile', [UserController::class, 'insertprofile']  )->name('insertprofile');

    // End Profile
});
