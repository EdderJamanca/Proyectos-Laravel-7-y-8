<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExcursionesModel extends Model
{
    protected $table='excursiones';

    protected $fillable=['titulo', 'img', 'id_Categoria', 'descripcion'];

    public $timestamps=false;
    public function categoria(){
        return $this->belongsTo(CategoriaModel::class, 'id_Categoria');
    }
}
