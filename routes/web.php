<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ShowProfileController;
use App\Http\Controllers\HomeController;



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

/*
Route::get('/search', function (Request $request){  //So'rov yuborish  Requestsning belgisi ?(so'roq)
    $name = $request-> get('name', 'Salima'); //bular difault qiymat
    $age = $request-> get('age', 52);
    return $name." ismli foydalanuchi inson ".$age." yoshda";
});   //Requstda birnechta o'zgaruvch berilishi mumkin o'zgaruvchilarning orasini ajratish u-n &(ampersant) belgisidan foydalaniladi


Route::get('/search', function (Request $request){
    return $request -> all(); //barcha elememtlarni qaytaradi JSON formatda
});
*/



/*

Route::group(['prefix'=>'dashboard'], function (){  //Routingda gruppalash
    Route::get('/users', function (){
        return "Users Dashboard";
    });


    Route::get('/statistic', function (){
        return "Statistic Dashboard";
    });
    Route::get('/chat', function (){
        return "Chat Dashboard";
    });


    Route::get('/me', function (){
        return "Me Dashboard";
    });
});
*/


// Controller hosil qilish  ( php artisan make:controller <UserController> )


Route::get('/user/{name?}',[UserController::class, 'show']);  //UserControllerni show metodiga murojat qilish




//Single action controller php artisan make:controller <ShowProfileController> --invokable

Route::get('/show/{id}', ShowProfileController::class); //Single action controllerda metod va massive kerak emas




Route::get('/users',[UserController::class, 'list']); //foydalanuvchilarning ro'yxatini aks ettiradi




Route::get('/home',[HomeController::class, 'index']);
Route::get('/members',[HomeController::class, 'members']);
