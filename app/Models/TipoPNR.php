<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPNR extends Model
{
    use HasFactory;

    protected $table='tipoPNR';
    protected $primerykey='id';
    protected $fillable=['tipo'];
    protected $guarded=[];
    public $timestamps=false;
}
