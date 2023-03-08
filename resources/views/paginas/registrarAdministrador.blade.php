@extends('plantilla') 

@section('content')
    <div class="content-wrapper" style="min-height:247px">
        <h1>Formulario de registro</h1>
        <form action="{{ route('guardar') }}" method="POST">
            @csrf
            <label for="">Nombre</label>
            <input type="text" name="nombre" id="nombre"><br>
            <label for="">Correo</label>
            <input type="text" name="correo" id="correo"><br>
            <label for="">Direccion</label>
            <input type="text" name="direccion" id="direccion"><br>

            <input class="btn btn-success" type="submit" name="guardar" value="Registrar Datos">

        </form>
    </div>  
@endsection