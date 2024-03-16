<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Residente extends Model
{
    use HasFactory;
    protected $fillable =['id','nombre', 'foto', 'movil', 'vivienda_id', 'propietario', 'nombre_propietario', 'movil_propietario', 'email_propietario'];

    public function vivienda(){
            return $this->belongsTo(Vivienda::class);
    }
}
