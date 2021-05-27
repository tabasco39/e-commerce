@extends('default')
@section('content')

   <p>marque : {{$car->marque}}</p>
    <p>année : {{$car->année}}</p>
    <a href="{{url('cars')}}">back</a>

@endsection