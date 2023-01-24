<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TrainsController as TrainsController;

Route::get('/', [TrainsController::class, 'index']);
