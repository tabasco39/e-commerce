@extends('default')

@section('content')
    <form action="{{url('cars')}}" method='post'>
    @csrf
        marque : <br><input type="text" name="marque"><br>
        année : <br><input type="text" name='année'><br>
        <input type="submit" value='envoyer'>
    </form>
    
@stop