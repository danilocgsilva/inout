<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoneyOutController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('money_out', MoneyOutController::class);
