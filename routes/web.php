<?php

use App\Livewire\Home;
use App\Livewire\Pages\About;
use App\Livewire\Pages\ContactUs;
use App\Livewire\Pages\PageStatus\Blogs;
use App\Livewire\Pages\Services\Services01;
use App\Livewire\Pages\Services\Services02;
use App\Livewire\Pages\Work\PortfolioFlex;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/about', About::class)->name('about');
Route::get('/contact-us', ContactUs::class)->name('contact-us');
Route::get('work/portfolio-flex', PortfolioFlex::class)->name('portfolio-flex');
Route::get('pages/blogs', Blogs::class)->name('blogs');
Route::get('/services/services-01', Services01::class)->name('services01');
Route::get('/services/services-02', Services02::class)->name('services02');
