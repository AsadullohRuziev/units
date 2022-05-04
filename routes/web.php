<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/hello/{name?}', function ($name = null) {
    return "Hello ".$name;
});


Route::get('/salom', function (){
   return "Salom";                      //Routing
});

Route::get('/assalom/{nom}',function ($nom){
    return 'Assalomu aleykum '.$nom;      //uzgaruvchi oladi
});
