<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPNR extends Model
{
    use HasFactory;

    protected $table='tipoPNR';
    protected $primaryKey='id';
    protected $fillable=['tipo'];
    public $timestamps=false;
}
