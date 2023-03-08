<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administradores extends Model
{
    //Asignando el nombre de la tabla
    protected $table = 'administradores';
    
    /*Esto se utiliza para que los atributos create_at y update_at no se utilizen en nuestra base de datos
        ya que laravel, los trae por defecto
    */
    public $timestamps = false;
}
