<?php

use App\Livewire\TreeForm;
use App\Livewire\TreeList;
use Illuminate\Support\Facades\Route;

Route::get('/add-tree', TreeForm::class)->name('tree.add');
Route::get('/', TreeList::class)->name('index');
