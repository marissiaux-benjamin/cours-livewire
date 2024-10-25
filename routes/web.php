<?php

use Illuminate\Support\Facades\Route;


Route::get('/organizations', \App\Livewire\OrganizationsTable::class)->name('organizations');
Route::get('/organizations/{organization}/edit', \App\Livewire\OrganizationEdit::class)->name('organization.edit');
Route::get('/organizations/create', \App\Livewire\OrganizationsCreate::class)->name('organizations.create');
