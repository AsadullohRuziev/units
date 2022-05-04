<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($name = null) //idni ixtiyoriy tazda qo'yish mumkin va difault qilish ham mumkin
    {
       // return view('show');  //view folderning ichidagi show.blade.php filening manzilini ko'rsatyapti

//        $name = 'Shaftoli';
        $mevalar = [
            'Anor',
            'Olma',
            'Behi',
            'Shaptoli'
        ];
        return view('users.show',[ //massive holatda yuborish
            "username" => $name,
            "mevalar" => $mevalar    //mana shunaqa holatda yana boshqa malumot yuborishimiz mumkin
        ]); //name ozgaruvchisini viewga jo'natish
    }
    public function list()
    {
        $users = [
          'Anora',
          'Olmaxon',
          'Behiboy',
          'Shaptolixon',
          'Lola'
        ];
        $mevalar = [
            'Anor',
            'Olma',
            'Behi',
            'Shaptoli'
        ];
         return view('users.list', compact('users', 'mevalar'));  //compact uslubida yuborish   // (,)vergul belgisini quyib va yana malumot yuborishimiz mumkin
    }
}
