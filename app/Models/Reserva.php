<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
    protected $fillable = ['zona_comun_id','fecha_reserva','hora_reserva','residente_id', 'estado'];

    public function residente(){
        return $this->belongsTo(Residente::class);
}

public function zona_comun(){
    return $this->belongsTo(Zona_comun::class);
}
}
