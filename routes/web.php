<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('user.home');
});
Route::get('/travail', function () {
    return view('user.rechercheTravail');
})->name('work');
Route::get('/viewWorks/{id}', \App\Http\Livewire\ViewWorks::class)->name('viewWorks');

Route::get('/publisher', function () {
    return view('user.addTravail');
})->name("publisher");

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
