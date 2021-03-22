<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mensajeModel extends Model
{
    protected $table='mensaje';
    protected $fillable=['nombre','email','mensaje','estado'];
    public $timestamps=false;
}
