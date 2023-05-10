<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class, 'index']);


Route::get('/RegForm', function () {
    return view('RegistrationForm');
});


//Route::get('user/{id}','User@showProfile');
//Route::post('/Users',[User::class,'display']);
//Route::view('/login','Users', ['uname' => '', 'upass'=>'']);


//Route::POST('Users',[User::class , 'showProfile']);
//Route::view('login', 'Users');

Route::get('/myfirstview', function () {
    return view('Master');
});

Route::pattern('name', '[0-9]+');
Route::get('profile/{name}', function($name)
{
return 'Hey there '. $name.' ! Welcome to whatsapp !';
});


