<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class usuario extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=User::create([
            'name'=>'Edder',
            'email'=>'correo1@correo1.com',
            'password'=>Hash::make('12345678'),
            'url'=>'http://codigoconjuan.com',
        ]);
        $user->perfil()->create();
        $user1=User::create([
            'name'=>'Ivan',
            'email'=>'correo@correo.com',
            'password'=>Hash::make('12345678'),
            'url'=>'http://codigoconjuan.com',
        ]);
        $user1->perfil()->create();
    }
}
