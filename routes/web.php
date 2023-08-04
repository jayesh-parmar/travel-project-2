<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Backend\DescriptionBackendController;
use App\Http\Controllers\Backend\HomePageController;
use App\Http\Controllers\Backend\TravelBackendController;
use App\Http\Controllers\BookTripeController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\Fruntend\ContactController;
use App\Http\Controllers\Fruntend\DestinationController;
use App\Http\Controllers\Fruntend\HomeController;
use App\Http\Controllers\Fruntend\PricingController;
use App\Http\Controllers\PostController;
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

// Route::get('/dashboard', function () {
//     return view('welcome');
// });

Route::get('/admin-penal', function () {
    // return view('dashboard');
    return view('admin.home');
})->middleware('can:isAdmin')->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

      //fruntebd Routes
//----------------------------
Route::get('/',[HomeController::class,'show'])->name('home-page');
Route::get('/show_booktriep',[BookTripeController::class,'show_booktriep'])->name('show_booktriep');
Route::post('/',[BookTripeController::class,'book_tripe'])->name('book_tripe')->middleware(['auth', 'verified']);
Route::get('/destination',[DestinationController::class,'index'])->name('destination-page');
// Route::get('/pricing',[PricingController::class,'index'])->name('pricing-page');
Route::get('/pricing',[TravelBackendController::class,'travel_backend_show'])->name('pricing_page');
Route::get('/contact',[ContactController::class,'index'])->name('contact-page');


       //backend Route
//-----------------------------

//for post
Route::get('/post',[PostController::class,'create'])->middleware('can:isAdmin')->name('create-post');
Route::post('/post',[PostController::class,'store'])->name('insert-post');

//for Customer Form
Route::get('/show_booktriep_data',[BookTripeController::class,'show_booktriep_data'])->name('show_booktriep_data');
Route::get('/export_pdf',[BookTripeController::class,'export_pdf'])->name('export_pdf');
Route::get('/edit/{id}',[BookTripeController::class,'edit_customer'])->name('edit_customer')->middleware('can:isAdmin');
Route::post('/update/{id}',[BookTripeController::class,'update_customer'])->name('update_customer');
Route::get('/delete/{id}',[BookTripeController::class,'delete_customer'])->name('delete_customer');
Route::get('/tresh_data',[BookTripeController::class,'tresh_customers'])->name('tresh_customer');
Route::get('/restore/{id}',[BookTripeController::class,'restore_customers'])->name('restore_customer');
Route::get('/destroy/{id}',[BookTripeController::class,'destroy_customers'])->name('force_customer');

//for Home Page Backend
Route::get('/home-page-backend',[HomePageController::class,'home_backend'])->name('home-page-backend');
Route::post('/home-page-backend',[HomePageController::class,'home_backend_store'])->name('home-page-backend_store')->middleware('can:isAdmin');;
Route::get('/home-page-show',[HomePageController::class,'home_backend_show'])->name('home-page-backend_show');
// Route::get('/pdf_view',[HomePageController::class,'showd']);

// For Travelar Page Backend
Route::get('/pricing_backend',[TravelBackendController::class,'travel_backend'])->name('pricing_backend');
Route::post('/pricing_backend',[TravelBackendController::class,'travel_backend_store'])->name('pricing_backend_store')->middleware('can:isAdmin');
Route::get('/edit_plans',[TravelBackendController::class,'edit_plans'])->name('update_plans');
Route::post('/plans/{id}',[TravelBackendController::class,'plans'])->name('store_plans');
Route::post('/questions',[TravelBackendController::class,'questions'])->name('questions')->middleware('can:isAdmin');
// Route::get('/update_posts/{id}',[TravelBackendController::class,'update_posts'])->name('update_posts');

//Contact Form
Route::post('/contact',[ContactFormController::class,'form_store'])->name('contact_form');
Route::get('/contact_deteil',[ContactFormController::class,'contact_deteil'])->name('contact_deteil');
Route::delete('delete-all', [ContactFormController::class, 'removeMulti'])->name('delete-all');
Route::get('contact_backend', [ContactFormController::class, 'contact_backend'])->name('contact_backend');
Route::post('contact_backend', [ContactFormController::class, 'contact_backend_data'])->name('contact_store');

//DescriptionBackend

 Route::get('description_backend',[DescriptionBackendController::class,'description_backend'])->name('description_backend');
 Route::post('description_backend',[DescriptionBackendController::class,'description_backend_update'])->name('description_update');



// Admin PAnel

Route::get('wp-admin',[AdminController::class,'admin_home']);