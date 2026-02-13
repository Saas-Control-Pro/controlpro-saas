<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\BelongsToEmpresa;

class Producto extends Model
{
    use HasFactory;
    use BelongsToEmpresa;
    protected $fillable = [
        'empresa_id',
        'codigo',
        'nombre',
        'descripcion',
        'precio_compra',
        'precio_venta',
        'unidad',
        'estado'
    ];

    public function sucursales()
    {
        return $this->belongsToMany(Sucursal::class, 'producto_sucursal')
            ->withPivot('stock', 'stock_minimo')
            ->withTimestamps();
    }
}
