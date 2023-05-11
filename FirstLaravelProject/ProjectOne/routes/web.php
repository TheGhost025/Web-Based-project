<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\RapidAPIController;

//Route::get('/', [PagesController::class, 'index']);
Route::get('/', function () {
    return view('welcome');
});

Route::get('/submit-form', [PagesController::class, 'index']);
Route::post('/submit-form', [PagesController::class, 'index']);

Route::get('/rapidapi/{date}', [RapidAPIController::class, 'getActor'])->name('rapidapi.getdata');

//Route::get('/Check', function () {
//    return view('welcome');
//})->name(valid);

//Route::post('check', [Validation::class, 'registValid'])->name('Pages.index');


//Route::get('check', [Validation::class, 'registValid'])->name('regist.Valid');

