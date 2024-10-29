<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peticion extends Model
{
    use HasFactory;

    public $table = "peticions";

    protected $fillable = ['id', 'radicado', 'tipo_solicitud', 'fecha_asignacion','fecha_vencimiento'];
   
   

    public function cursos()
    {

        return $this->belongsToMany(Curso::class, 'curso_estudiante', 'estudiante_id', 'curso_id');
    }



}
