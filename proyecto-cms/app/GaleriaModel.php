<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GaleriaModel extends Model
{
    protected $table="galeria";

    protected $fillable=['img','id_excursion'];

    public $timestamps=false;
}
