<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/endpoint', function () {
    return response()->json([
        'id' => 1,
        'nom' => 'Ramex'
    ]);
});

