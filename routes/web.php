<?php

use App\Livewire\Home;
use App\Livewire\Pages\About;
use App\Livewire\Pages\ContactUs;
use App\Livewire\Pages\PageStatus\Blogs;
use App\Livewire\Pages\Services\Services01;
use App\Livewire\Pages\Services\Services02;
use App\Livewire\Pages\Work\PortfolioFlex;
use App\Livewire\Pages\Work\PortfolioGrid;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/about', About::class)->name('about');
Route::get('/contact-us', ContactUs::class)->name('contact-us');

Route::prefix('work')->group(function () {
    Route::get('/portfolio-flex', PortfolioFlex::class)->name('portfolio-flex');
    Route::get('/portfolio-grid', PortfolioGrid::class)->name('portfolio-grid');
});

Route::prefix('pages')->group(function () {
    Route::get('/blogs', Blogs::class)->name('blogs');
});

Route::prefix('services')->group(function () {
    Route::get('/services-01', Services01::class)->name('services01');
    Route::get('/services-02', Services02::class)->name('services02');
});
