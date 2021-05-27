@extends('default')

@section('content')

@if($message = Session::get('success'))
    <p>{{$message}}</p>
@endif
    <form action="{{url('update',$car->id)}}" method='POST'>
    @csrf
    @method('PUT')
        marque : <br><input type="text" name="marque" value="{{$car->marque}}"><br>
        année : <br><input type="text" name='année' value="{{$car->année}}"><br>
        <input type="submit" value='Editer'>
    </form>
    
@stop