<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contribuyente extends Model
{
    use HasFactory;



    protected $table = 'contribuyentes';

    protected $fillable = ['id', 'cedula', 'nombre_completo', 'correo', 'Referencia'];

   

    public function cursos()
    {

        return $this->belongsToMany(Curso::class, 'curso_estudiante', 'estudiante_id', 'curso_id');
    }
}