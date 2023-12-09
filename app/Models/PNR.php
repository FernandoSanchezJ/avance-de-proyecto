<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PNR extends Model
{
    use HasFactory;
    protected $table='PNR';
    protected $primerykey='id';
    protected $fillable=['descripcion', 'idT', 'idRepartidor', 'idComparativa'];
    protected $guarded=[];
    public $timestamps=false;
}
