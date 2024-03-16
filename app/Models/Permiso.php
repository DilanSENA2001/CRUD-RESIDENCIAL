<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    use HasFactory;
    protected $fillable =['vivienda_id','nombre_visitante','documento_visitante'];

    public function vivienda(){
            return $this->belongsTo(Vivienda::class);
    }
}
