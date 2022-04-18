<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    // los campos q  se van insertar
    protected $fillable = [
        'titulo',
        'preparacion',
        'ingredientes',
        'imagen',
        'user_id',
        'categoria_id'
    ];

    use HasFactory;
    // obtine la categoria de la receta por via KF
    public function categoria(){
        return $this->belongsTo(CategoriaReceta::class);
    }

    // obteniendo el user por medio del kf de receta
    public function autor() {
        return $this->belongsTo(User::class,'user_id');
    }
    // recetas a la tabla pivote
    public function like(){
        return $this->belongsToMany(User::class,'likes_receta','receta_id','user_id');
    }
}
