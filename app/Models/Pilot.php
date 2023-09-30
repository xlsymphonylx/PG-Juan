<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pilot extends Model
{
    use HasFactory;
    public $table = 'pilot';
    protected $fillable = [
        'nombre_de_piloto',   // Pilot's Name
        'licencia',           // License
        'codigo_piloto',      // Pilot Code
        'cabezal',            // Header
        'placa',              // Plate Number
    ];
}
