<?php

use App\Models\Ad;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Blade;

Route::get("ad/{id}", function ($id) {
    $ad = Ad::find($id);
    $title = $ad->title;
    $content = $ad->description;
    $compiled = Blade::render($content);
    return view('pages.simple_ad', compact('title', 'compiled','ad'));
})->name('pages.simple-ad');
