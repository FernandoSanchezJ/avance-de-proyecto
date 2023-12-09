<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table='cliente';
    protected $primerykey='id';
    protected $fillable=['nombre', 'apellidos', 'telefono', 'cp', 'municipio', 'calle', 'numI', 'numE', 'referencia'];
    protected $guarded=[];
    public $timestamps=false;
}
