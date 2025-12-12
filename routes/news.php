<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

Route::get('/news', [NewsController::class,'news_view'])->name('pages.news');
Route::get('/news/{id}', [NewsController::class,'news_details_view'])->name('pages.news.details');