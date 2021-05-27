@extends('default')

@section('content')

    @if($message=Session::get('success'))
        <p>{{$message}}</p>    
    @endif
    <a href="{{url('create-car')}}">créer une voiture</a>
    <table>
       <tr>
            <th>marque</th>
            <th>année</th>
       </tr> 
       @foreach($data as $index)
       <tr>
            <td>{{$index->marque}}</td>
            <td>{{$index->année}}</td>
            <td>
                  
                    <a class="btn btn-info" href="{{ url('show',$index->id) }}">Show</a>    
                    <a class="btn btn-primary" href="{{ url('edit',$index->id) }}">Edit</a>
                    <form action="{{url('delete',$index->id)}}" method='post'>
                        @csrf
                        @method('delete')
                        <input type="submit" value='Delete'>
                    </form>   
                  
            </td>
       </tr>
       @endforeach

    </table>

@stop