<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repartidor extends Model
{
    use HasFactory;
    protected $table='repartidor';
    protected $primerykey='id';
    protected $fillable=['nombre', 'apellidos', 'edad', 'cumpleaños', 'curp', 'genero', 'telefono', 'email', 'licencia', 'idCarro'];
    public $timestamps=false;

    public function Carro(){
        return $this->hasOne(Carro::class, 'id', 'idCarro');
    }
}
