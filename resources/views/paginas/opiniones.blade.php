@extends('plantilla') 

@section('content')
    <div class="content-wrapper" style="min-height:247px">
        <h1>Seccion de Opiniones</h1>
        
        <form action="{{ route('getOpiniones') }}" method="POST">
            @method('GET')
            <label for="">Busqueda:</label>
            <input type="text" name="buscar" placeholder="busqueda por nombre" value="{{ $buscar }}">
            <input type="submit" class="btn btn-info" value="Buscar">
        </form>
        <br><br>
        <table class="table table-dark">
            <thead>
                <th>Articulo</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Contenido</th>
                <th>Respuesta</th>
            </thead>
            <tbody>
                @if (count($opiniones) <= 0)
                    <tr>
                        <td>
                            <div class="alert alert-danger" role="alert">
                                No se encontraron resultados
                            </div>
                        </td>
                    </tr>
                @else
                    @foreach ($opiniones as $value)
                        <tr>
                            <td>{{$value->titulo}} </td>
                            <td>{{$value->nombre_opinion}} </td>
                            <td>{{$value->correo_opinion}} </td>
                            <td>{{$value->contenido_opinion}} </td>
                            <td>{{$value->respuesta_opinion}} </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    {{ $opiniones->links() }}
    </div>

@endsection