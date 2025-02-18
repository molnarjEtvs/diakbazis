<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiakController;

Route::get('/', [DiakController::class,"index"]);
