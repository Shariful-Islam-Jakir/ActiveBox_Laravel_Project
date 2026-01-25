<?php

use App\Http\Controllers\DownloadController;
use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OurTeamController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\WorksController;
use Illuminate\Support\Facades\Route;


Route::get('/home',[HomeController::class,'home'])->name('home');
Route::get('/features',[FeaturesController::class,'features'])->name('features');
Route::get('/works',[WorksController::class,'works'])->name('works');
Route::get('/ourteam',[OurTeamController::class,'ourteam'])->name('ourteam');
Route::get('/testimonials',[TestimonialsController::class,'testimonials'])->name('testimonials');
Route::get('/download',[DownloadController::class,'download'])->name('download');
