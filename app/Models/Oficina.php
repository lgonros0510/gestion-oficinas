<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Oficina extends Model
{
    protected $fillable = ['nombre', 'direccion'];

    public function empleados()
    {
        return $this->hasMany(Empleado::class);
    }
}
