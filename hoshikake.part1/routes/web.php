<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReserveController;

Route::view('/reserves', 'index')->name('reserve.index');
Route::view('/reserves/guidance', 'guidance')->name('reserve.guidance');
Route::get('/reserves/list', [ReserveController::class, 'list'])->name('reserve.list');
Route::view('/reserve/new', 'new')->name('reserve.new');
Route::post('/reserve/store', [ReserveController::class, 'store'])->name('reserve.store');
Route::get('/reserve/edit/{id}', [ReserveController::class, 'edit'])->name('reserve.edit');
Route::post('/reserve/update/{id}', [ReserveController::class, 'update'])->name('reserve.update');
Route::post('/reserve/delete/{id}', [ReserveController::class, 'destroy'])->name('reserve.destroy');

Route::get('/', function () {
    return redirect('/reserves');
});
