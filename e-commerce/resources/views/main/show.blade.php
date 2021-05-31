@extends('accueil')

@section('content')
    <div class="container">
    <a href="/" class="btn btn-primary mb-3"> Back</a>
        <div class="row">          
            <div class="col-md-6">
                <img src='{{asset("produits/".$produit->photo)}}' alt="" width="500px" height=500px>
            </div>
            <div class="col-md-6">
                <h2 >{{$produit->nom}}</h2>
                <span style="float:right;font-size:30px">{{$produit->prix.'$'}}</span>
                <p>{{$produit->description}}</p>
                <button class="btn btn-success"><i style="margin-right:5px;font-size:20px" class="bi bi-cart4"></i> Add Cart</button>
            </div>
        </div>

    </div>
@stop