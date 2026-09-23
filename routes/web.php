<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountyController;
use App\Http\Controllers\CityController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/counties', [CountyController::class, 'index'])->name('counties.index');
Route::get('/', [CountyController::class, 'index'])->name('counties.index');
Route::get('/counties/create', [CountyController::class, 'create'])->name('counties.create');
Route::post('/counties', [CountyController::class, 'store'])->name('counties.store');
Route::get('/counties/{county}/edit', [CountyController::class, 'edit'])->name('counties.edit');
Route::patch('/counties/{county}', [CountyController::class, 'update'])->name('counties.update');
Route::delete('/counties/{county}', [CountyController::class, 'destroy'])->name('counties.destroy');

Route::get('/cities', [CityController::class, 'index'])->name('cities.index');
Route::get('/cities/create', [CityController::class, 'create'])->name('cities.create');
Route::post('/cities', [CityController::class, 'store'])->name('cities.store');
Route::get('/cities/{city}/edit', [CityController::class, 'edit'])->name('cities.edit');
Route::patch('/cities/{city}', [CityController::class, 'update'])->name('cities.update');
Route::delete('/cities/{city}', [CityController::class, 'destroy'])->name('cities.destroy');
