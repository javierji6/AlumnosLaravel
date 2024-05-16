<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $fillable=["nombre", "dni", "edad", "email"]; // Especifíca los atributos que se pueden asignar en masa

    public function profesor() {
        return $this->belongsTo(Profesor::class, "idProfesor");
    }
}
