<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Llegada extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table='llegada';
    protected $primaryKey='id';
    protected $fillable = ['dia', 'mes', 'año', 'hora'];
    protected $guarded=[];
    public $timestamps=false;
}
