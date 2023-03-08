<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administradores;

class AdministradoresController extends Controller
{
    /**
     * index, store, update, destroy
     */

    /** Metodo para ver todos los administradores */
    public function index(){
        //select * from administradores
        $administrador = Administradores::all(); /** ORM */
        //$admin = Administradores::select("nombre")->get();

        //paginas es la carpeta y administradores es el archivo .blade.php
        return view("paginas.administradores", array("administrador" => $administrador));
    }

    /** Retorna la vista de registrar Administrador */
    public function obtenerFormulario(){
        return view("paginas.registrarAdministrador");
    }

    /** Registrar Admin */
    public function store(Request $request){
        //insert into...
        $admin = new Administradores();
        $admin->nombre_admin = $request->post('nombre');
        $admin->correo_admin = $request->post('correo');
        $admin->direccion_admin = $request->post('direccion');
        $admin->fecha_admin = now(); /** capturar la fecha actual y la hora */
        $admin->save();

        //redireccionando a la tabla de administradores
        return redirect()->route('getAdmin');
    }

    /** Obteniendo un administrador por su ID y retornando el formulario de actualizar datos*/
    public function obtenerFormularioActualizado($id){
        //select * from administradores where id = ?
        $admin = Administradores::find($id);

        return view("paginas.actualizarAdministradores", array("administrador" => $admin));
    }

    /** Actualizando datos */
    public function update(Request $request, $id){
        //Verificando que id se selecciono y asi poder actualizar los datos de dicho administrador
        $admin = Administradores::find($id); /** */
        $admin->nombre_admin = $request->post('nombre');
        $admin->correo_admin = $request->post('correo');
        $admin->direccion_admin = $request->post('direccion');
        $admin->update(); /** update set.. */

        //redireccionando a la tabla de administradores
        return redirect()->route('getAdmin');
    }

    /** Eliminando datos */
    public function destroy($id){
        /*Aqui verificamos que el id que se haya seleccionado se elimine por completo
            delete from administradores where id = ?
        */
        $admin = Administradores::where("id","=", $id)->delete();

        //redireccionando a la tabla de administradores
        return redirect()->route('getAdmin');
    }
}
