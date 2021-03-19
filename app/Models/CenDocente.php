<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CenDocente extends Model
{
    use HasFactory;
    
    protected $table = "cendocentes";
    protected $fillable = [
        'denominacion', 
        'codigo',
        'cif', 
        'titularidad', 
        'dir_postal', 
        'cp', 
        'director_nom', 
        'director_apell1', 
        'director_apell2',
        'identificador', 
        'tipo_identificable'
        ];
    
}