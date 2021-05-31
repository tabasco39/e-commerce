@extends('accueil')

@section('content')
      <div class="album py-5 bg-light">      
        <div class="container">
          <div class="row">
          @foreach($produits as $produit)
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="{{asset('produits/'.$produit->photo)}}" height='250px' alt="Card image cap">
                <div class="card-body">
                  <p class="card-text"><b>{{$produit->nom}}</b></p>
                  <p>{{$produit->description}}</p>
                  <div class="d-flex justify-content-between align-items-center">                  
                      <a href="{{route('show',$produit->id)}}"><i style="color:#0c8ff2" class="bi bi-eye"></i></a>
                    <h3 class="text-muted">{{$produit->prix.'$'}}</h3>
                  </div>
                </div>
              </div>
            </div>
            @endforeach   
          </div>
        </div>
      
      </div>
     
@endsection