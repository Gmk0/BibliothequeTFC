<?php

use Illuminate\Support\Facades\Route;


Route::get('/domaineExpertise', \App\Http\Livewire\Admin\DomaineEpxertise::class)->name('domaineExpertise');

Route::get('/worksList', \App\Http\Livewire\Admin\WorksList::class)->name('worksList');

