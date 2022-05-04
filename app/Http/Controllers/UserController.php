<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id = null) //idni ixtiyoriy tazda qo'yish mumkin va difault qilish ham mumkin
    {
        return "user prifile for ID ".$id;
    }
}
