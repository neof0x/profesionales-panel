<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesional extends Model
{
    //use HasFactory;
    protected $table = "profesional"; //nombre de la tabla en la bd
    protected $primaryKey = "id";
    protected $fillable = [
        'name' , 'apellido', 'dni', 'email', 'profesion', 'programas','fecha','archivos'
    ]; 
}
