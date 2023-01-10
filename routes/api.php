<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActorController;
use App\Http\Controllers\DirectorController;
use Appp\Http\Controller\MovieController;

Route::post('actor', [ActorController::class, 'postActor']);
Route::post('director', [DirectorController::class, 'postDirector']);
Route::post('movie', [MovieController::class, 'postMovie']);