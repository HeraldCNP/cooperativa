<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Socio;
class Prestamo extends Model
{
    protected $table = "prestamos";

    public function persona()
    {
        return $this->belongsTo(Socio::class);
    }
}
