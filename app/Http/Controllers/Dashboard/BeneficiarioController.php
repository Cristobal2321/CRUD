<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\beneficiario\StoreRequest;
use App\Http\Requests\beneficiario\PutRequest;
use App\Models\Familiar;
use App\Models\beneficiario;


class BeneficiarioController extends Controller
{
    public function index()
    {
        $beneficiarios = Beneficiario::paginate(15);
        return view('dashboard.beneficiario.index', compact('beneficiarios'));
    }

    public function create()
    {
        $beneficiario = new Beneficiario(); 
        $familiar = new Familiar();
        return view('dashboard.beneficiario.create', compact('beneficiario','familiar')); 
    
    }




    public function completo()
    {
        $beneficiario = new Beneficiario(); 
        $familiar = new Familiar();

        return view('dashboard.beneficiario.completo', compact('beneficiario','familiar')); 
    
    }


    public function store (StoreRequest $request)
    {
  
            // Validar y guardar los datos del beneficiario
            $beneficiarioData = $request->validated();
            $beneficiario = Beneficiario::create($beneficiarioData);
        
            $familiarData = $request->validated(); 
            $familiar = new Familiar($familiarData);
            $beneficiario->familiares()->save($familiar);
        
            return redirect()->route('beneficiario.index')->with('status', 'Registro Creado');
        
    }

    public function show(beneficiario $beneficiario)
    {
        return view("dashboard.beneficiario.show",compact('beneficiario'));
    }

public function edit(beneficiario $beneficiario)
{
    // Cargar los familiares relacionados con el beneficiario
    
    $familiares = $beneficiario->familiares;

    return view('dashboard.beneficiario.edit', compact('beneficiario', 'familiares'));
}

public function update(PutRequest $request, Beneficiario $beneficiario)
{
    $data = $request->validated();

    // Actualiza los datos del beneficiario
    $beneficiario->update($data);

    // Verifica si hay datos de familiares en el formulario
    if ($request->has('familiares')) {
        $familiaresData = $request->input('familiares');

        foreach ($familiaresData as $familiarId => $familiarData) {
            $familiar = Familiar::find($familiarId);
            if ($familiar) {
                $familiar->update([
                    'nombre_familiar' => $familiarData['nombre'],
                    'edad_familiar' => $familiarData['edad'],
                    'parentesco_familiar' => $familiarData['parentesco'],
                    'ocupacion_familiar' => $familiarData['ocupacion'],
                    'ingreso_familiar' => $familiarData['ingreso'],

                ]);
            }
        }
    }

    return redirect()->route('beneficiario.index')->with('status', 'Registro Actualizado');
}


    public function destroy(beneficiario $beneficiario)
    {
        $beneficiario->delete();
        
        return redirect()->route('beneficiario.index')->with('status', 'Archivo eliminado');
    }
}
