<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public  function index()
    {
        return view('app');
    }
    public  function members()
    {
        $members = [
            'Anora',
            'Olmaxon',
            'Behiboy',
            'Shaptolixon',
            'Lola'
        ];
        $people = [];
        return view('members', compact('members', "people"));
    }
    public  function about()
    {
        return view('about');
    }
}
