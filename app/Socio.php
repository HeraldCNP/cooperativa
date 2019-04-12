<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Persona;
use App\Prestamo;

class Socio extends Model
{
    protected $table = 'socios';

    public function persona()
    {
        return $this->belongsTo(Persona::class);
    }

    public function prestamos()
    {
        return $this->hasMany(Prestamo::class);
    }
}
