<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrashCategoriesController;
use App\Http\Controllers\WasteBanksController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/wastebank_officer/trash_category', [TrashCategoriesController::class, 'index'])->name('trash_category');
Route::get('/wastebank_officer/trash_category/create', [TrashCategoriesController::class, 'create'])->name('trash_category.create');
Route::post('/wastebank_officer/trash_category/create', [TrashCategoriesController::class, 'store'])->name('trash_category.store');
Route::get('/wastebank_officer/trash_category/{id}/edit',[TrashCategoriesController::class, 'edit'])->name('trash_category.edit');
Route::post('/wastebank_officer/trash_category/{id}/edit',[TrashCategoriesController::class, 'update'])->name('trash_category.update');
Route::delete('/wastebank_officer/trash_category/{id}/destroy', [TrashCategoriesController::class, 'destroy'])->name('trash_category.destroy');

Route::get('/wastebank_officer/waste_bank', [WasteBanksController::class, 'index'])->name('waste_bank');
Route::get('/wastebank_officer/waste_bank/create', [WasteBanksController::class, 'create'])->name('waste_bank.create');
Route::post('/wastebank_officer/waste_bank/create', [WasteBanksController::class, 'store'])->name('waste_bank.store');
Route::get('/wastebank_officer/waste_bank/{id}/edit',[WasteBanksController::class, 'edit'])->name('waste_bank.edit');
Route::post('/wastebank_officer/waste_bank/{id}/edit',[WasteBanksController::class, 'update'])->name('waste_bank.update');
Route::delete('/wastebank_officer/waste_bank/{id}/destroy',[WasteBanksController::class, 'destroy'])->name('waste_bank.destroy');   


require __DIR__.'/auth.php';
