<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Empresa;
use App\Models\Sucursal;
use Illuminate\Support\Facades\Hash;

class RolesDemoSeeder extends Seeder
{
    public function run()
    {
        // Crear empresa demo
        $empresa = Empresa::create([
            'nombre' => 'Empresa Demo',
            'plan' => 'pro',
            'estado' => 'activa',
        ]);

        // Crear sucursal demo
        $sucursal = Sucursal::create([
            'empresa_id' => $empresa->id,
            'nombre' => 'Sucursal Principal',
        ]);

        $roles = [
            'cliente',
            'recepcion',
            'clasificador',
            'mensajero',
            'despachador',
            'administrador',
            'auditor',
            'admin',
            'propietario'
        ];

        foreach ($roles as $rol) {

            User::create([
                'name' => ucfirst($rol),
                'email' => $rol . '@correoexample.com',
                'password' => Hash::make('123456789'),
                'empresa_id' => $empresa->id,
                'sucursal_id' => $sucursal->id,
                'rol' => $rol,
                'estado' => 'activo',
                'theme' => 'light',
            ]);
        }
    }
}
