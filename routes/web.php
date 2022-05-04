<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('welcome');
});



/*

Route::get('/salom', function (){
   return "Salom";                      //Routing
});

Route::get('/assalom/{nom}',function ($nom){
    return 'Assalomu aleykum '.$nom;      //uzgaruvchi oladi
});


*/

/*
Route::get('/hello/{name?}', function ($name = null) {
    return "Hello ".$name;
});  //Global cheklov o'rnatildi


Route::get('/user/{name?}', function ($name = null) {
    return "Hello user ".$name;
});   //Global cheklov o'rnatildi

*/




/*
Route::get('/{action}/{name?}', function ($action, $name = null) {  //birnecha o'garuvchi olishi
    return $action.$name;
});

Route::get('/user/{name?}', function ($name = null) {
    return "Hello user ".$name;
});
*/


Route::get('/search', function (Request $request){  //So'rov yuborish  Requestsning belgisi ?(so'roq)
    $name = $request-> get('name', 'Salima'); //bular difault qiymat
    $age = $request-> get('age', 52);
    return $name." ismli foydalanuchi inson ".$age." yoshda";
});   //Requstda birnechta o'zgaruvch berilishi mumkin o'zgaruvchilarning orasini ajratish u-n &(ampersant) belgisidan foydalaniladi
