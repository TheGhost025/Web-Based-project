<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\RapidAPIController;
use App\Http\Controllers\Validation;
use App\Mail\TestMail;
use Illuminate\Support\Facades\App;

Route::get('/', function () {
    return 200;
});
Route::get('/submit.form', [PagesController::class, 'index']);
Route::post('/submit.form', [PagesController::class, 'index']);



Route::get('add', [Validation::class, 'index']);
Route::post('/submit', [Validation::class, 'submit'])->name('submit.form');

Route::get('/submit.form/{date}', [RapidAPIController::class, 'getActor'])->name('rapidapi.getActor');

Route::get('LangChange/{lang}',function($lang){
    if(in_array($lang,['en','ar'])){
        session()->put('lang',$lang);
    }
    return redirect()->back();
})->name("LangChange");


Route::get('/send',function(){
    Mail::to('ammodi9@gmail.com')->send(new TestMail());
    return response('sending');
});
