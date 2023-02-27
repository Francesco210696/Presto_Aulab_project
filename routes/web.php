<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\FrontController;
<<<<<<< HEAD
use App\Http\Controllers\RevisorController;
=======
use App\Http\Controllers\UserController;
>>>>>>> a9f7ca10a4a01fc6d521ede9f6f87e64d50332a0
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


//FRONTCONTROLLER
Route::get('/', [FrontController::class, 'welcome'])->name('welcome');
Route::get('/categoria/{category}', [FrontController::class, 'categoryShow'])->name('category.show');





//ANNOUNCEMENTCONTROLLER
Route::get('/dettaglio/annuncio/{announcement}', [AnnouncementController::class, 'showAnnouncement'])->name('announcements.show');
Route::get('/annunci', [AnnouncementController::class, 'indexAnnouncement'])->name('announcements.index');

//LIVEWIRE
Route::get('/nuovo-annuncio', [AnnouncementController::class, 'createAnnouncement'])->middleware('auth')->name('announcements.create');


//MAIL
Route::get('/contattaci', [FrontController::class, 'contactUs'])->name('contactUs');
Route::post('/salva/contatto', [FrontController::class, 'saveContact'])->name('saveContact');

<<<<<<< HEAD
//Home Revisore
Route::get('/revisor/home',[RevisorController::class,'index'])->middleware('isRevisor')->name('revisor.index');

//Accetta Annuncio

Route::patch('/accetta/annuncio/{announcement}',[RevisorController::class,'acceptAnnouncemnt'])->middleware('isRevisor')->name('revisor.accept_announcement');

//Rifiuta Annuncio

Route::patch('/rifiuta/annuncio/{announcement}',[RevisorController::class,'rejectAnnouncemnt'])->middleware('isRevisor')->name('revisor.reject_announcement');

//Richiedi di diventare revisore

Route::get('/richiesta/revisore', [RevisorController::class,'becomeRevisor'])->middleware('auth')->name('became.revisor');

//Rendi utente revisore

Route::get('/rendi/revisore/{user}',  [RevisorController::class,'makeRevisor'])->name('make.revisor');
=======
//SEARCHBAR
Route::get('/ricerca/annuncio', [FrontController::class, 'searchAnnouncements'])->name('announcements.search');
>>>>>>> a9f7ca10a4a01fc6d521ede9f6f87e64d50332a0
