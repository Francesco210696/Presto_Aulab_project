<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\RevisorController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

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


//FRONTCONTROLLER
Route::get('/', [FrontController::class, 'welcome'])->name('welcome');
Route::get('/categoria/{category}', [FrontController::class, 'categoryShow'])->name('category.show');
Route::get('/profilo/{user}', [FrontController::class, 'profile'])->middleware('auth')->name('profile');






//ANNOUNCEMENTCONTROLLER
Route::get('/dettaglio/annuncio/{announcement}', [AnnouncementController::class, 'showAnnouncement'])->name('announcements.show');
Route::get('/annunci', [AnnouncementController::class, 'indexAnnouncement'])->name('announcements.index');

//LIVEWIRE
Route::get('/nuovo-annuncio', [AnnouncementController::class, 'createAnnouncement'])->middleware('auth', 'verified')->name('announcements.create');

//MAIL
Route::get('/contattaci', [FrontController::class, 'contactUs'])->name('contactUs');
Route::post('/salva/contatto', [FrontController::class, 'saveContact'])->name('saveContact');
Route::post('/contatta/utente/{email}', [FrontController::class, 'emailforShop'])->name('contactUser');

//Home Revisore
Route::get('/revisor/home', [RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor.index');

//Accetta Annuncio

Route::patch('/accetta/annuncio/{announcement}', [RevisorController::class, 'acceptAnnouncement'])->middleware('isRevisor')->name('revisor.accept_announcement');

//Rifiuta Annuncio

Route::patch('/rifiuta/annuncio/{announcement}', [RevisorController::class, 'rejectAnnouncement'])->middleware('isRevisor')->name('revisor.reject_announcement');

//Richiedi di diventare revisore

Route::get('/richiesta/revisore', [RevisorController::class, 'becomeRevisor'])->middleware('auth', 'verified')->name('became.revisor');

//Rendi utente revisore

Route::get('/rendi/revisore/{user}',  [RevisorController::class, 'makeRevisor'])->name('make.revisor');

//SEARCHBAR
Route::get('/ricerca/annuncio', [FrontController::class, 'searchAnnouncements'])->name('announcements.search');

//CAMBIO LINGUA

Route::post('/lingua/{lang}', [FrontController::class, 'setLenguage'])->name('set_lenguage_locale');
