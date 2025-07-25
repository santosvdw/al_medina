<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/cupping', function () {
    return view('cupping', [
        "titel" => "Cupping",
        "foto" => "background-image.webp",
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        "titel" => "Contact",
        "foto" => "contact-bg.jpg",
    ]);
});

Route::get('/hijama', function () {
    return view('hijama', [
        "titel" => "Hijama",
        "foto" => "hijama-bg.jpg",
    ]);
});

Route::get('/over_ons', function () {
    return view('over_ons', [
        "titel" => "Over ons",
        "foto" => "over_ons-bg.png",
    ]);
});

Route::get('/massages', function () {
    return view('massages', [
        "titel" => "Massages",
        "foto" => "massage-bg.jpg",
    ]);
});

Route::get('/template', function () {
    return view('template', [
        "titel" => "Template",
        "foto" => "background-image.webp",
    ]);
});

Route::get('/habba_sawda', function () {
    return view('habba_sawda', [
        "titel" => "Habba Sawda",
        "foto" => "background-image.webp",
    ]);
});

Route::get('/tarieven', function () {
    return view('tarieven_en_diensten', [
        "titel" => "Tarieven en diensten",
        "foto" => "tarieven-bg.jpg",
    ]);
});

Route::get('/faq', function () {
    return view('faq', [
        "titel" => "Veelgestelde vragen",
        "foto" => "background-image.webp",
    ]);
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
