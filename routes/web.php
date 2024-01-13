<?php

use Illuminate\Support\Facades\Route;
use App\Models\People;

Route::get('/', function () {
    return view('welcome');
});
