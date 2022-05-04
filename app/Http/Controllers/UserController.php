<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($name = null) //idni ixtiyoriy tazda qo'yish mumkin va difault qilish ham mumkin
    {
       // return view('show');  //view folderning ichidagi show.blade.php filening manzilini ko'rsatyapti

//        $name = 'Shaftoli';
        return view('show',[
            "username" => $name
        ]); //name ozgaruvchisini viewga jo'natish
    }
}
