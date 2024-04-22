<?php

use Illuminate\Support\Facades\Route;

Route::get('/studio', function () {
    return view('welcome');
});
