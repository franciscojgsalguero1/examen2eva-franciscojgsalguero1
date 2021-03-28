<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    use HasFactory;
    protected $table = "tutores";
    
    protected $guarded = ['id', 'updated_at', 'created_at'];
    /*protected $fillable = [
        'bussines',
        'typedocument',
        'identity',
        'name',
        'firstname',
        'secondname',
        'country',
        'province',
        'municipality',
        'state',
        'telephone',
        'email'
    ];*/
}
