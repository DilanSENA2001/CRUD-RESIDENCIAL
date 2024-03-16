<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paquete extends Model
{
    use HasFactory;
    protected $fillable=['destinatario','vivienda_id','recibido_por','entregado_a'];
    public function vivienda(){
        return $this->belongsTo(Vivienda::class);
}
}
