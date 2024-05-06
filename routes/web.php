<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectDetailController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/project/{id}', [ProjectDetailController::class, 'view'])->name('project.view');
Route::get('/project', [ProjectDetailController::class, 'index'])->name('project.index');
