<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::view('/tables', 'tables')->name('tables');
Route::view('/edit', 'edit')->name('edit');
Route::view('/datatables', 'datatables')->name('datatables');
