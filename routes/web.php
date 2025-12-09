<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\TenderController;
use App\Http\Controllers\WelcomeController;
use App\Mail\ContactMail;
use App\Models\Ad;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/blog.php';

Route::get('/', [WelcomeController::class,'home_view'])->name('pages.welcome');

Route::get('/contact', [ContactController::class,'contact_view'])->name('pages.contact');
Route::post('/contact', [ContactController::class,'read_dat_and_send_email'])->name('create.contact');

Route::get('/about', function () {
    return view('pages.about');
})->name('pages.about');


Route::get('/genesis-houses', function () {
    $why_genesis = [];
        $images_for_why = [
            asset('assets/images/why-genesis/1756528022750.jpg'),
            asset('assets/images/why-genesis/1756528022772.jpg'),
            asset('assets/images/why-genesis/1756528022793.jpg'),
            asset('assets/images/why-genesis/1756528022837.jpg'),
            asset('assets/images/why-genesis/1756528022879.jpg'),
            asset('assets/images/why-genesis/1756528022898.jpg'),
            asset('assets/images/why-genesis/1756528022916.jpg'),
            asset('assets/images/why-genesis/1756528022956.jpg'),
            asset('assets/images/why-genesis/1756528022973.jpg'),
            asset('assets/images/why-genesis/1756528022990.jpg'),
            asset('assets/images/why-genesis/1756528023008.jpg'),
            asset('assets/images/why-genesis/1756528023025.jpg'),
            asset('assets/images/why-genesis/IMG_20250513_171941.jpg'),
            asset('assets/images/why-genesis/IMG_20250513_181441.jpg'),
            asset('assets/images/why-genesis/IMG_20250514_171435.jpg'),
            asset('assets/images/why-genesis/IMG_20250516_173747.jpg'),
            asset('assets/images/why-genesis/IMG_20250520_140226.jpg'),
            asset('assets/images/why-genesis/IMG_20250520_143509.jpg'),
            asset('assets/images/why-genesis/IMG_20250520_154609.jpg'),
            asset('assets/images/why-genesis/IMG_20250520_154642.jpg'),
            asset('assets/images/why-genesis/IMG_20250521_081229.jpg'),
            asset('assets/images/why-genesis/IMG_20250521_081249.jpg'),
            asset('assets/images/why-genesis/IMG_20250525_072435.jpg'),
            asset('assets/images/why-genesis/IMG_20250525_072724.jpg'),
            asset('assets/images/why-genesis/IMG_20250606_115025.jpg'),
            asset('assets/images/why-genesis/IMG_20250606_115138.jpg'),
            asset('assets/images/why-genesis/IMG_20250703_134210.jpg'),
            asset('assets/images/why-genesis/IMG_20250703_134344.jpg'),
            asset('assets/images/why-genesis/IMG_20250722_120213.jpg'),
            asset('assets/images/why-genesis/IMG_20250722_120356.jpg'),
            asset('assets/images/why-genesis/IMG_20250819_071514.jpg'),
            asset('assets/images/why-genesis/Polish_20250823_063638590.jpg'),
            asset('assets/images/why-genesis/Polish_20250823_064917439.jpg'),
        ];
        foreach ($images_for_why as $index => $val) {
            $why_genesis[$index] = ["image" => $val];
        }
    return view('pages.genesis-houses',compact('why_genesis'));
})->name('pages.genesis-houses');

Route::get('/components', function () {
    return view('pages.components');
})->name('pages.components');

Route::get('/ads', function () {
    $ads = Ad::all();
    return view('pages.ads', compact('ads'));
})->name('pages.ads');

Route::get('/blueprint-catalog', function () {
    return view('pages.blueprint-catalog');
})->name('pages.blueprint-catalog');

Route::get('/arajanlat', function () {
    return view('pages.tender');
})->name('pages.tender');

Route::post('arajanlat',[TenderController::class, 'create_tender'])->name('tender.create');

Route::get('/adatkezelesi-tajekoztato', function(){
    return view('pages.adatvedelmi-iranyelvek');
})->name('pages.adatvedelem');

// Route::get('/teljesitmennyilatkozat', function(){
//     return view('pages.teljesitmennyilatkozat');
// })->name('pages.teljesitmennyilatkozat');

Route::get('/alkalmazastechnika', function(){
    return view('pages.alkalmazastechnika');
})->name('pages.alkalmazastechnika');

use App\Models\Msg;
use App\Models\Tender;

Route::get('/tester', function(){
    $msgs=Msg::all();
    $tenders=Tender::all();
    return view('mail.weekdata',compact('msgs','tenders'));

})->name('pages.alkalmazastechnika');
