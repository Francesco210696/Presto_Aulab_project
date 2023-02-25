<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\FrontController;
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
