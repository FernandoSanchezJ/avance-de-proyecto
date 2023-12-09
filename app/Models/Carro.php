<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    use HasFactory;

    protected $table='carro';
    protected $primerykey='id';
    protected $fillable=['marca', 'modelo', 'color', 'matricula', 'año'];
    protected $guarded=[];
    public $timestamps=false;

    
}
