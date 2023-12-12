<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comparativa extends Model
{
    use HasFactory;
    protected $table='comparativa';
    protected $primarykey='id';
    protected $fillable=['idCodigo'];
    public $timestamps=false;
}
