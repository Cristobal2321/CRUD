<?php

namespace App\Models;
use App\Models\Beneficiario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Familiar extends Model

{
    use HasFactory;
    
    protected $table = 'familiares';
    protected $fillable = [
        'id',
        'beneficiario_id',
        'nombre_familiar',
        'parentesco_familiar',
        'edad_familiar',
        'ocupacion_familiar',
        'ingreso_familiar',
        'total_ingreso_fam',
    ];

    public function beneficiario()
    {
        return $this->belongsTo(Beneficiario::class);
    }


    
}
