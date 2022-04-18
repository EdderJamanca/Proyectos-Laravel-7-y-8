<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */


    protected $fillable = [
        'name',
        'email',
        'password',
        'url',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    // evento q se ejeuta cuando un usuario es creado
    protected static function boot(){
        parent::boot();

        // asignar perfil una vez se haya creado un usuario nuevo
        static::created(function($user){
            $user->perfil()->create();
        });
    }

    /** Relacion 1:N de Usuario a Recetas*/ 
    public function recetas(){
        return $this->hasMany(Receta::class);
    }

    public function perfil(){
        return $this->hasOne(Perfil::class);
    }
    // relaciona la tabla usuario a la tabla pivote
    public function MeGusta(){
        return $this->belongsToMany(Receta::class,'likes_receta','user_id','receta_id');
    }
}
