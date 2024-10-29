<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    public $table = "funcionario";

    protected $fillable = ['id', 'cedula', 'nombre_completo', 'correo', 'telefono','responsable','lider_area','area'];
   
   

    public function cursos()
    {

        return $this->belongsToMany(Curso::class, 'curso_estudiante', 'estudiante_id', 'curso_id');
    }
    
}
