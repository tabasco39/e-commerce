@extends ('template')

@section ('content')
    <form action="{{ url('users') }}" method='POST'>
        @csrf
        <label for="nom">Entrer votre nom:</label>
        <input type="text" name='nom'>
        <input type="submit" value='envoyer' >
    </form> 
@stop