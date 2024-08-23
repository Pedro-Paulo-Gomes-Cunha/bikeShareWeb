<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estacao extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'latitude',
        'longitude',
        'capacity',
        'premio_entrega',
        'id_bicicleta',
    ];

    public function bicicleta(){
        return $this->belongsTo(Bicicleta::class);
    }

    public function docas(){
        return $this->hasMany(Doca::class);
    }

}
