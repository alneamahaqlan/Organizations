<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\FooterController;
use App\Http\Controllers\Api\HomeController;

Route::get('/footers', [FooterController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);