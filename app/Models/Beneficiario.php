<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class beneficiario extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'expediente',
        'parroquia',
        'asunto',
        'nombre',
        'domicilio',
        'colonia',
        'edad',
        'estado_civil',
        'ocupacion',
        'fecha_nacimiento',
        'lugar_nacimiento',
        'telefono_casa',
        'telefono_movil',
        'nombre_conyuge',
        'otro',
        'parentesco_con',
        'edad_con',
        'ocupacion_con',
        'estado_civil_con',
        'escolaridad',
        'servicio_medico',
        

    ];

    public function familiares()
    {
        return $this->hasMany(Familiar::class);
    }
}
