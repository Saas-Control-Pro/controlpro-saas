<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paquete extends Model
{
    use HasFactory;

    protected $table = 'paquetes';

    protected $fillable = [
        'codigo',
        'empresa_id',
        'sucursal_id',
        'usuario_id',
        'motorista_id',
        'estado',
        'descripcion',
        'precio',
        'alto',
        'ancho',
        'largo',
        'peso',
        'nombre_destinatario',
        'telefono_destinatario',
        'email_destinatario',
        'direccion_origen',
        'direccion_destino',
        'fragilidad',
    ];

    protected $casts = [
        'precio' => 'decimal:2',
        'alto'   => 'decimal:2',
        'ancho'  => 'decimal:2',
        'largo'  => 'decimal:2',
        'peso'   => 'decimal:2',
    ];

    /*
    |--------------------------------------------------------------------------
    | RELACIONES
    |--------------------------------------------------------------------------
    */

    // Empresa dueña del paquete
    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }

    // Sucursal donde fue creado
    public function sucursal()
    {
        return $this->belongsTo(Sucursal::class);
    }

    // Usuario que creó el paquete
    public function usuario()
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }

    // Motorista asignado
    public function motorista()
    {
        return $this->belongsTo(User::class, 'motorista_id');
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES (MUY IMPORTANTE PARA MULTIEMPRESA)
    |--------------------------------------------------------------------------
    */

    public function scopeEmpresa($query, $empresaId)
    {
        return $query->where('empresa_id', $empresaId);
    }

    public function scopeEstado($query, $estado)
    {
        return $query->where('estado', $estado);
    }

}
