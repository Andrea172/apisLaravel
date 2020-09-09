@extends('plantilla')
@section('seccion')
<br>
<a href="{{route('traducir')}}" class="btn btn-warning btn-sm">Traducir a inglés</a>
<a href="{{route('noticias')}}" class="btn btn-warning btn-sm">Traducir a español</a>

<h1>{{$texto[0]}}</h1>
<br>
<h3>{{$texto[1]}}</h3>
<ul>
    <li>{{$texto[2]}}</li>
    <li>{{$texto[3]}}</li>
    <li>{{$texto[4]}}</li>
    <li>{{$texto[5]}}</li>
</ul>


  


@endsection