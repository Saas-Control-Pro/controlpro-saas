<?php

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Builder;

trait BelongsToEmpresa
{
    protected static function bootBelongsToEmpresa()
    {
        // Auto asignar empresa al crear
        static::creating(function ($model) {
            if (auth()->check()) {
                $model->empresa_id = auth()->user()->empresa_id;
            }
        });

        // Scope automático por empresa
        static::addGlobalScope('empresa', function (Builder $builder) {
            if (auth()->check()) {
                $builder->where('empresa_id', auth()->user()->empresa_id);
            }
        });
    }
}
