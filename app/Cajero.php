<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Amortizacion;

class Cajero extends Model
{
    protected $table = 'cajeros';

    public function amortizaciones(){
        return $this->hasMany(Amortizacion::class);
    }
}
