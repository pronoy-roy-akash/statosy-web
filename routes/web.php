<?php

use App\Http\Controllers\SiteController;
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

Route::get('/', [SiteController::class, 'index'])->name('home');
Route::post('/contact', [SiteController::class, 'contact'])->name('contact');
Route::get('/thank-you', [SiteController::class, 'thankYou'])->name('thank-you');

Route::prefix('company')->name('company.')->group(function () {
    Route::get('/about-us', [SiteController::class, 'page'])->defaults('page', 'company.about-us')->name('about');
    Route::get('/awards-recognition', [SiteController::class, 'page'])->defaults('page', 'company.awards-recognition')->name('awards');
    Route::get('/careers', [SiteController::class, 'page'])->defaults('page', 'company.careers')->name('careers');
    Route::get('/case-studies', [SiteController::class, 'page'])->defaults('page', 'company.case-studies')->name('case-studies');
    Route::get('/news', [SiteController::class, 'page'])->defaults('page', 'company.news')->name('news');
});

Route::prefix('solutions')->name('solutions.')->group(function () {
    Route::get('/', [SiteController::class, 'page'])->defaults('page', 'solutions.index')->name('index');
    Route::get('/software-development', [SiteController::class, 'page'])->defaults('page', 'solutions.software-development')->name('software-development');
    Route::get('/software-management', [SiteController::class, 'page'])->defaults('page', 'solutions.software-management')->name('software-management');
    Route::get('/it-consulting', [SiteController::class, 'page'])->defaults('page', 'solutions.it-consulting')->name('it-consulting');
    Route::get('/cloud-management', [SiteController::class, 'page'])->defaults('page', 'solutions.cloud-management')->name('cloud-management');
    Route::get('/cyber-security-services', [SiteController::class, 'page'])->defaults('page', 'solutions.cyber-security-services')->name('cyber-security-services');
    Route::get('/customer-support-services', [SiteController::class, 'page'])->defaults('page', 'solutions.customer-support-services')->name('customer-support-services');
});

Route::prefix('industries')->name('industries.')->group(function () {
    Route::get('/end-user-products', [SiteController::class, 'page'])->defaults('page', 'industries.end-user-products')->name('end-user-products');
    Route::get('/government-and-public', [SiteController::class, 'page'])->defaults('page', 'industries.government-and-public')->name('government-and-public');
    Route::get('/education-and-non-profit', [SiteController::class, 'page'])->defaults('page', 'industries.education-and-non-profit')->name('education-and-non-profit');
    Route::get('/banking-and-finance', [SiteController::class, 'page'])->defaults('page', 'industries.banking-and-finance')->name('banking-and-finance');
    Route::get('/energy-and-utilities', [SiteController::class, 'page'])->defaults('page', 'industries.energy-and-utilities')->name('energy-and-utilities');
    Route::get('/legal-and-law-firms', [SiteController::class, 'page'])->defaults('page', 'industries.legal-and-law-firms')->name('legal-and-law-firms');
});
