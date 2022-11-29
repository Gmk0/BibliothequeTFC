<?php

use App\Http\Controllers\EtudiantController;
use Illuminate\Support\Facades\Route;


Route::get('/domaineExpertise', \App\Http\Livewire\Admin\DomaineEpxertise::class)->name('domaineExpertise');

Route::get('/worksList', \App\Http\Livewire\Admin\WorksList::class)->name('worksList');

Route::get('file-import-export', [EtudiantController::class, 'fileImportExport']);
Route::post('file-import', [EtudiantController::class, 'fileImport'])->name('file-import');
Route::get('file-export', [EtudiantController::class, 'fileExport'])->name('file-export');
Route::get('/student', function () {
    return view('admin.student');
})->name('student');
