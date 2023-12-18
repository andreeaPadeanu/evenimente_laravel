<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SponsorController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ParteneriController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', function () {
    return "hello";
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/sponsors', [SponsorController::class, 'index'])->name('sponsors');
Route::get('/parteneri', [ParteneriController::class, 'index'])->name('parteneri');
Route::get('/events', [EventController::class, 'index'])->name('events');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/contul_meu', 'App\Http\Controllers\ContulMeuController@index')->name('contul_meu');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/evenimente', [EventController::class, 'index'])->name('events');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'sendMessage'])->name('contact.sendMessage');
Route::get('/events/{event}', [EventController::class, 'show'])->name('show');




