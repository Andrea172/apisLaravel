@extends('plantilla')
@section('seccion')

    <h1>Este es mi equipo de trabajo</h1>

    @foreach($equipo as $person)
        <a href= "{{route('nosotros', $person)}}" class="h4 text-danger">{{$person}}</a><br/>

    @endforeach

    @if(!empty($nombre))
        @switch($nombre)
            @case($nombre == 'Andrea')
                <h2 class="mt-5">El miembro del equipo {{$nombre}} tienes las siguientes tareas:</h2>
                <ul>
                    <li>Desarrollar la plantilla principal</li>
                    <li>Conexión con la base de datos</li>
                </ul>
            @break

            @case($nombre == 'Lucía')
                <h2 class="mt-5">El miembro del equipo {{$nombre}} tienes las siguientes tareas:</h2>
                <ul>
                    <li>Desarrollar la plantilla para el administrador</li>
                    <li>Conexión con las apis</li>
                </ul>
            @break

            @case($nombre == 'Alejandra')
                <h2 class="mt-5">El miembro del equipo {{$nombre}} tienes las siguientes tareas:</h2>
                <ul>
                    <li>Desarrollar la plantilla para el cliente</li>
                    <li>Armar base de datos</li>
                </ul>
            @break
        @endswitch
    @endif

@endsection