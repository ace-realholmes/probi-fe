<?php

use App\Livewire\Home;
use App\Livewire\Pages\About;
use App\Livewire\Sections\PortfolioFlex;
use App\Livewire\Sections\Services;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/about', About::class)->name('about');
Route::get('/work/portfolio-flex', PortfolioFlex::class)->name('portfolio-flex');
Route::get('/services/services-01', Services::class)->name('services01');
