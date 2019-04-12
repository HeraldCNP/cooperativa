<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cajero;

class Amortizacion extends Model
{
    protected $table = "amortizaciones";
    public function prestamo(){
        return $this->belonsTo(Prestamo::class);
    }
    public function cajera(){
        return $this->belongsTo(Cajero::class);
    }
}
