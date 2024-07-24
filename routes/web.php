<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

// MAIN ROUTES
Route::get('/', [PagesController::class, "index"])->name('home');
Route::get('/about', [PagesController::class, "about"])->name('about');
Route::get("/ma-route", [PagesController::class, "maRoute"])->name('maroute');
Route::get("/contactez-nous", [PagesController::class, "contact"])->name('contact');
Route::get("/data", [PagesController::class, "data"])->name('data');

// CARS ROUTES
Route::get("/cars", [CarController::class, "index"])->name("cars.index");

// ARTICLES
Route::get("/blog/article/{slug}", [PagesController::class, "article"])->name('article');
Route::get("/occasions/{marque}/{modele}", [PagesController::class, "modele"])->name('occasions.modele');

// REDIRECTIONS
Route::get("/about/me", function () {
    return redirect()->route("about");
});
