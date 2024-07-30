<?php

use App\Models\Car;
use App\Models\Owner;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\PagesController;

// MAIN ROUTES
Route::get('/', [PagesController::class, "index"])->name('home');
Route::get('/about', [PagesController::class, "about"])->name('about');
Route::get("/ma-route", [PagesController::class, "maRoute"])->name('maroute');
Route::get("/contactez-nous", [PagesController::class, "contact"])->name('contact');
Route::get("/data", [PagesController::class, "data"])->name('data');

// CARS ROUTES
Route::get("/cars", [CarController::class, "index"])->name("cars.index");
Route::get("/cars/create", [CarController::class, "create"])->name("cars.create");
Route::post("/cars/store", [CarController::class, "store"])->name("cars.store");
Route::get("/cars/{id}", [CarController::class, "show"])->name("cars.show");
Route::get("/cars/edit/{id}", [CarController::class, "edit"])->name("cars.edit");
Route::patch("/cars/update/{id}", [CarController::class, "update"])->name("cars.update");
Route::delete("/cars/destroy/{id}", [CarController::class, "destroy"])->name("cars.destroy");

// OWNER ROUTES
Route::resource("owners", OwnerController::class);

// ARTICLES
Route::get("/blog/article/{slug}", [PagesController::class, "article"])->name('article');
Route::get("/occasions/{marque}/{modele}", [PagesController::class, "modele"])->name('occasions.modele');

// REDIRECTIONS
Route::get("/about/me", function () {
    return redirect()->route("about");
});


Route::get("owner/{id}", function ($id) {
    return Owner::where("id", $id)->with("cars")->firstOrFail();
});
