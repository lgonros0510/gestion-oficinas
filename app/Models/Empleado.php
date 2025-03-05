<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $fillable = [
        'nombre', 'primer_apellido', 'segundo_apellido', 'rol',
        'fecha_nacimiento', 'dni', 'email', 'oficina_id'
    ];

    protected $dates = ['fecha_nacimiento'];

    public function oficina()
    {
        return $this->belongsTo(Oficina::class);
    }
}
