<?php

use Illuminate\Support\Facades\Route;

Route::get('studio/{splat?}', function () {
    return view('welcome');
});
