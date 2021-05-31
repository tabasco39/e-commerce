<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Produit;

class mainController extends Controller
{
    public function index()
    {
        $produits = Produit::all();
        return view('main.index',compact('produits'));
    }

    public function show($id)
    {
        $produit = Produit::find($id);
        return view('main.show',compact('produit'));
    }
    

}
