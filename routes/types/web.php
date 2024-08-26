<?php

use Illuminate\Support\Facades\Route;


Route::prefix('admin')
    ->middleware('auth')
    ->group(function () {
        Route::get('types-customers', \App\Livewire\TypsTypesCustomers\Index::class)
            ->name('types-customers.index')
            ->middleware('permission:types-customers.index');

        Route::get('types-customers/create', \App\Livewire\TypsTypesCustomers\Create::class)
            ->name('types-customers.create')
            ->middleware('permission:types-customers.create');

        Route::get('types-customers/show/{typsTypesCustomer}', \App\Livewire\TypsTypesCustomers\Show::class)
            ->name('types-customers.show')
            ->middleware('permission:types-customers.show');

        Route::get('types-customers/update/{typsTypesCustomer}', \App\Livewire\TypsTypesCustomers\Edit::class)
            ->name('types-customers.edit')
            ->middleware('permission:types-customers.edit');
    });
