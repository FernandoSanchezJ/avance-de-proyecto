<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PNR extends Model
{
    use HasFactory;
    protected $table='PNR';
    protected $primaryKey='id';
    protected $fillable = ['descripcion', 'idT', 'idRepartidor'];
    protected $guarded=[];
    public $timestamps=false;

    public function TipoPNR(){
        return $this->hasOne(TipoPNR::class, 'id', 'idT');
    }

    public function Repartidor(){
        return $this->hasOne(Repartidor::class, 'id', 'idRepartidor');
    }

}

