<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'plan',
        'estado',
        'trial_ends_at',
        'subscription_ends_at',

    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function sucursales()
    {
        return $this->hasMany(Sucursal::class);
    }
}
