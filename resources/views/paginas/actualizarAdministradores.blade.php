@extends('plantilla') 

@section('content')
    <div class="content-wrapper" style="min-height:247px">
        <h1>Formulario de registro</h1>
        <!-- La variable $administrador proviene del controlador AdministradorController, 
            metodo obtenerFormularioActualizado() y asignamos los atributos de la tabla -->
        <form action="{{ route('actualizar', $administrador->id) }}" method="POST">
            @method('PUT')
            @csrf
            <label for="">Nombre</label>
            <input type="text" name="nombre" id="nombre" value="{{ $administrador->nombre_admin }}"><br>
            <label for="">Correo</label>
            <input type="text" name="correo" id="correo" value="{{ $administrador->correo_admin }}"><br>
            <label for="">Direccion</label>
            <input type="text" name="direccion" id="direccion" value="{{ $administrador->direccion_admin }}"><br>

            <input class="btn btn-success" type="submit" name="actualizar" value="Actualizar Datos">

        </form>
    </div>  
@endsection