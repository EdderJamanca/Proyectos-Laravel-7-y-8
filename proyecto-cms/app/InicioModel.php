<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InicioModel extends Model
{
    protected $table='inicio';

    protected $fillable=['logo','telefono','direccion','email','nombre'];
    public $timestamps=false;
   
}
