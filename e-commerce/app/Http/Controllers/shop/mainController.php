<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Produit;
use App\Models\Category;

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

    public function viewCategory(){
        $categories = Category::all();
        $produits = Produit::all();

        return view('main.categorie',compact('categories','produits'));
    }
    

}
