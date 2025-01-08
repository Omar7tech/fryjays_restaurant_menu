<?php
use App\Livewire\AdminHome;
use App\Livewire\Categories;
use App\Livewire\CategoriesProducts;
use App\Livewire\CategoryCreate;
use App\Livewire\CategoryEdit;
use App\Livewire\Home;
use App\Livewire\ProductCreate;
use App\Livewire\ProductEdit;
use App\Livewire\ProductImage;
use App\Livewire\Products;
use App\Livewire\ProductsCategory;
use App\Livewire\ProductShow;
use App\Livewire\Settings;
use Illuminate\Support\Facades\Route;


Route::get('/', Home::class)->name("home");

Route::prefix("admin")->name("admin.")->group(function () {
    Route::get('/', AdminHome::class)->name("index");

    Route::prefix("products")->name("products.")->group(function () {
        Route::get("/", Products::class)->name("index");
        Route::get("/create", ProductCreate::class)->name("create");
        Route::get("/{product}", ProductShow::class)->name("show");
        Route::get("/{product}/edit", ProductEdit::class)->name("edit");
        Route::get("/{product}/image", ProductImage::class)->name("image");
        Route::get("/category/{category}", ProductsCategory::class)->middleware('exists:categories,id')->name("category");
    });


    Route::prefix("categories")->name("categories.")->group(function () {
        Route::get("/", Categories::class)->name("index");
        Route::get("/create", CategoryCreate::class)->name("create");
        Route::get("/{category}/edit", CategoryEdit::class)->name("edit");
    });

    Route::get("/settings", Settings::class)->name("settings");



});
