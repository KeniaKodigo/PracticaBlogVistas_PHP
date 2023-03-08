@extends('plantilla') 

@section('content')
    <div class="content-wrapper" style="min-height:247px">
        <h1>Seccion de Administradores</h1>
        
        <a href="{{ url('/registrar')}}" class="btn btn-dark">Registrar Administrador</a>
        <br><br>
        <table class="table table-dark">
            <thead>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Direccion</th>
            </thead>
            <tbody>
                <!-- La variable $administrador proviene del controlador AdministradorController, metodo index() -->
                @foreach ($administrador as $value)
                    <tr>
                        <td>{{$value->nombre_admin}} </td>
                        <td>{{$value->correo_admin}} </td>
                        <td>{{$value->direccion_admin}} </td>
                        <td>
                            <form action="{{ route('editar', $value->id)}}" method="POST">
                                @method('GET')
                                @csrf
                                <button class="btn btn-info">Actualizar</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('eliminar', $value->id)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection