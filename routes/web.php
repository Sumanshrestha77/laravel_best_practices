<?php

use App\Http\Controllers\api\CompanyDataController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\SampleController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/where/{englishDate}', [BookController::class, 'where']);
Route::apiResource('/company-data', CompanyDataController::class);

Route::get('sample', SampleController::class);

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'show']);

Route::get('nepaliDates/{englishDate}', [BookController::class, 'showNepaliDate']);
