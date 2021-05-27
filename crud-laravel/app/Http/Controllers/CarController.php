<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function create(){
        return view('create');
    }

    public function store(Request $request){
         $request->validate([
            'marque' => 'required',
            'année' => 'required'
        ]);
        $car = Car::create($request->all());
        return redirect('/cars')->with('success','voiture crée avec succès');
    }

    public function index()
    {
        $data = Car::all();
    
        return view('index',compact('data'));
    }

    public function show($id){
        $car = Car::find($id);
        return view('show',compact('car'));
    }

    public function  edit($id)
    {
        $car = Car::find($id);
        return view('edit',compact('car'));
    }

    public function update(Request $request,$id){
        $car = Car::findorfail($id);
        $car->update($request->all());
        return redirect('cars')->with('success','voiture bien mis à jour');
    }

    public function delete($id)
    {
        $car = Car::find($id);
        $car->delete();
        return redirect('cars')->with('success','voiture suppimer');
    }
}
