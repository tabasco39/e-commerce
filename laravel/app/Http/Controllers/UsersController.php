<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function create()
    {
        return view('info');
    }

    public function store(Request $request)
    {
        return 'Votre nom est : ' .$request->input('nom');
    }
}
