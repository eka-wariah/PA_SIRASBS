<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrashCategoriesController;
use App\Http\Controllers\WasteBanksController;
use App\Http\Controllers\CitizensController;
use App\Http\Controllers\PaymentCategoriesController;
use App\Http\Controllers\WasteBankTreasurerController;
use App\Http\Controllers\RegionsController;


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
    Route::get('/treasurer/users', [CitizensController::class, 'index'])->name('users.index');
    Route::get('/treasurer/users/create', [CitizensController::class, 'create'])->name('users.create');
    Route::post('/treasurer/users/create', [CitizensController::class, 'store'])->name('users.store');
    Route::delete('/treasurer/users/{id}',[CitizensController::class, 'destroy'])->name('users.destroy');
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

Route::get('/treasurer/payment_category', [PaymentCategoriesController::class, 'index'])->name('payment_category');
Route::get('/treasurer/payment_category/create', [PaymentCategoriesController::class, 'create'])->name('payment_category.create');
Route::post('/treasurer/payment_category/create', [PaymentCategoriesController::class, 'store'])->name('payment_category.store');
Route::get('/treasurer/payment_category/{id}/edit',[PaymentCategoriesController::class, 'edit'])->name('payment_category.edit');
Route::post('/treasurer/payment_category/{id}/edit',[PaymentCategoriesController::class, 'update'])->name('payment_category.update');
Route::delete('/treasurer/payment_category/{id}/destroy', [PaymentCategoriesController::class, 'destroy'])->name('payment_category.destroy');

Route::get('/treasurer/waste_bank', [WasteBankTreasurerController::class, 'index'])->name('waste_bank');

Route::get('/citizen_associations/region', [RegionsController::class, 'index'])->name('region');
Route::get('/citizen_associations/region/create', [RegionsController::class, 'create'])->name('region.create');
Route::post('/citizen_associations/region/create', [RegionsController::class, 'store'])->name('region.store');
Route::get('/citizen_associations/region/{id}/edit',[RegionsController::class, 'edit'])->name('region.edit');
Route::post('/citizen_associations/region/{id}/edit',[RegionsController::class, 'update'])->name('region.update');
Route::delete('/citizen_associations/region/{id}/destroy', [RegionsController::class, 'destroy'])->name('region.destroy');

require __DIR__.'/auth.php';
