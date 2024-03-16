<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vivienda extends Model
{
    use HasFactory;
    protected $fillable =['nomenclatura', 'bloque_id', 'telefono'];

    
    public function bloque(){
        return $this->belongsTo(Bloque::class);
    }

    public function residente(){
        return $this->belongsTo(Residente::class);
    }
}
