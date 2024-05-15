<?php

use Illuminate\Support\Facades\Route;


Route::get('/antrian', App\Livewire\Wait\Index::class)->name('wait.index');
Route::get('/tambah', App\Livewire\Wait\Create::class)->name('wait.create');
Route::get('/edit/{id}', App\Livewire\Wait\Edit::class)->name('wait.edit');
Route::get('/', App\Livewire\Wait\Listing::class)->name('wait.listing');