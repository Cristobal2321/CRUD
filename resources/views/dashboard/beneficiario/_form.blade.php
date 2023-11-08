
@csrf



<h3>Datos Personales</h3>



{{----------------------------- Editar Expediente -----------------------------}}


@if (isset ($task) && $task=="edit")


        <label for="">Parroquia</label>
         <input type="text" class="form-control" name="parroquia" value="{{ old('parroquia', $beneficiario->parroquia) }}">  

        <label for="">Asunto</label>
        <input type="text" class="form-control" name="asunto" value="{{ old('asunto', $beneficiario->asunto) }}">

        <label for="">Nombre</label>
        <input type="text" class="form-control" name="nombre" value="{{ old('nombre', $beneficiario->nombre) }}">

        <label for="">Domicilio</label>
        <input type="text" class="form-control" name="domicilio" value="{{ old('domicilio', $beneficiario->domicilio) }}">
        
        <label for="">Colonia</label>
        <input type="text" class="form-control" name="colonia" value="{{ old('colonia', $beneficiario->colonia) }}">
        
        <label for="">Edad</label>
        <input type="number" class="form-control" name="edad" value="{{ old('edad', $beneficiario->edad) }}" min="0" max="100" step="1">

        <label for="">Estado civil</label>
        <select class="form-control" name="estado_civil" >
            <option value=""{{ old('estado_civil', $beneficiario->estado_civil) === '' ? 'selected' : '' }}></option>
            <option value="soltero"{{ old('estado_civil', $beneficiario->estado_civil) === 'soltero' ? 'selected' : '' }}>Soltero</option>
            <option value="casado"{{ old('estado_civil', $beneficiario->estado_civil) === 'casado' ? 'selected' : '' }}>Casado</option>
            <option value="divorciado"{{ old('estado_civil', $beneficiario->estado_civil) === 'divorciado' ? 'selected' : '' }}>Divorciado</option>
            <option value="viudo"{{ old('estado_civil', $beneficiario->estado_civil) === 'viudo' ? 'selected' : '' }}>Viudo</option>
            <option value="union libre"{{ old('estado_civil', $beneficiario->estado_civil) === 'union libre' ? 'selected' : '' }}>Union Libre</option>
        </select>

        
        <label for="">Ocupacion</label>
        <input type="text" class="form-control" name="ocupacion" value="{{ old('ocupacion', $beneficiario->ocupacion) }}" >
    
        <label for="">Fecha de nacimiento</label>
        <input type="date" class="form-control" name="fecha_nacimiento" value="{{ old('fecha_nacimiento', $beneficiario->fecha_nacimiento) }}" >
        
        
        <label for="">Lugar de nacimiento</label>
        <input type="text" class="form-control" name="lugar_nacimiento" value="{{ old('lugar_nacimiento', $beneficiario->lugar_nacimiento) }}" >
        

        <label for="">telefono de casa</label>
        <input type="text" class="form-control" name="telefono_casa" value="{{ old('telefono_casa', $beneficiario->telefono_casa) }}" >

        <label for="">telefono Movil</label>
        <input type="text" class="form-control" name="telefono_movil" value="{{ old('telefono_movil', $beneficiario->telefono_movil) }}" >
    
        



        @if($beneficiario->expediente === "completo")


            <h3>Estructura Familiar</h3>

            <label for="">Nombre del conyuge</label>
            <input type="text" class="form-control" name="nombre_conyuge" value="{{ old('nombre_conyuge', $beneficiario->nombre_conyuge) }}" >

            <label for="">otro</label>
            <input type="text" class="form-control" name="otro" value="{{ old('otro', $beneficiario->otro) }}" >

            <label for="">Parentesco</label>
            <input type="text" class="form-control" name="parentesco_con" value="{{ old('parentesco_con', $beneficiario->parentesco_con) }}" >
            
            <label for="">Edad</label>
            <input type="number" class="form-control" name="edad_con" value="{{ old('edad_con', $beneficiario->edad_con) }}" min="0" max="100" step="1">
            
            <label for="">ocupacion</label>
            <input type="text" class="form-control" name="ocupacion_con" value="{{ old('ocupacion_con', $beneficiario->ocupacion_con) }}" >
            

            <label for="">Estado civil</label>
            <select class="form-control" name="estado_civil_con" >
                <option value=""{{ old('estado_civil', $beneficiario->estado_civil) === '' ? 'selected' : '' }}></option>
                <option value="soltero"{{ old('estado_civil_con', $beneficiario->estado_civil_con) === 'soltero' ? 'selected' : '' }}>Soltero</option>
                <option value="casado"{{ old('estado_civil_con', $beneficiario->estado_civil_con) === 'casado' ? 'selected' : '' }}>Casado</option>
                <option value="divorciado"{{ old('estado_civil_con', $beneficiario->estado_civil_con) === 'divorciado' ? 'selected' : '' }}>Divorciado</option>
                <option value="viudo"{{ old('estado_civil_con', $beneficiario->estado_civil_con) === 'viudo' ? 'selected' : '' }}>Viudo</option>
                <option value="union libre"{{ old('estado_civil_con', $beneficiario->estado_civil_con) === 'union libre' ? 'selected' : '' }}>Union Libre</option>
            </select>

            <label for="">Escolaridad </label>
            <select class="form-control" name="escolaridad" >
                <option value="preescolar"{{ old('escolaridad', $beneficiario->escolaridad) === 'preescolar' ? 'selected' : '' }}>Preescolar</option>
                <option value="primaria"{{ old('escolaridad', $beneficiario->escolaridad) === 'primaria' ? 'selected' : '' }}>Primaria</option>
                <option value="secundaria"{{ old('escolaridad', $beneficiario->escolaridad) === 'secundaria' ? 'selected' : '' }}>Secundaria</option>
                <option value="superior"{{ old('escolaridad', $beneficiario->escolaridad) === 'superior' ? 'selected' : '' }}>Superior</option>
                <option value="maestria"{{ old('escolaridad', $beneficiario->escolaridad) === 'maestria' ? 'selected' : '' }}>Maestria</option>
                <option value="sin estudios"{{ old('escolaridad', $beneficiario->escolaridad) === 'sin estudios' ? 'selected' : '' }}>sin estudios</option>

            </select>

            <br>
        
            <h2>HIJOS O FAMILIARES</h2>

            @foreach ($familiares as $familiar)
            <label for="nombre_familiar_{{ $familiar->id }}">Nombre del Familiar</label>
            <input type="text" class="form-control" name="familiares[{{ $familiar->id }}][nombre]" value="{{ old('familiares.' . $familiar->id . '.nombre', $familiar->nombre_familiar) }}">
            
            <label for="edad_familiar_{{ $familiar->id }}">Edad</label>
            <input type="number" class="form-control" name="familiares[{{ $familiar->id }}][edad]" value="{{ old('familiares.' . $familiar->id . '.edad', $familiar->edad_familiar) }}" min="0" max="100" step="1">
         
            <label for="parentesco_familiar_{{ $familiar->id }}">Parentesco</label>
            <input type="text" class="form-control" name="familiares[{{ $familiar->id }}][parentesco]" value="{{ old('familiares.' . $familiar->id . '.parentesco', $familiar->parentesco_familiar) }}" >
         
            <label for="ocupacion_familiar_{{ $familiar->id }}">Ocupacion</label>
            <input type="text" class="form-control" name="familiares[{{ $familiar->id }}][ocupacion]" value="{{ old('familiares.' . $familiar->id . '.ocupacion', $familiar->ocupacion_familiar) }}" >
        
            <label for="ingreso_familiar_{{ $familiar->id }}">Ocupacion</label>
            <input type="text" class="form-control" name="familiares[{{ $familiar->id }}][ingreso]" value="{{ old('familiares.' . $familiar->id . '.ingreso', $familiar->ingreso_familiar) }}" >
     
             @endforeach
      
         
         
        
                    

        @endif
        
    
@endif


{{----------------------------- Crear Expediente -----------------------------}}




@if ((isset ($tas) && $tas=="parcial") || (isset ($tasko) && $tasko=="completo"))

        <button id="abrirCamara">Abrir Cámara</button>


      

        @if (isset ($tas) && $tas=="parcial")
        <input type="hidden" name="expediente" value=" Parcial">
        @endif

        @if (isset ($tasko) && $tasko=="completo")
        <input type="hidden" name="expediente" value="Completo">
        @endif

        <div class="cont1">

            <label for="">Parroquia</label>
            <input type="text" class="form-control" name="parroquia" value="{{ old('parroquia', $beneficiario->parroquia) }}">
            
            <label for="">Asunto</label>
            <input type="text" class="form-control" name="asunto" value="{{ old('asunto', $beneficiario->asunto) }}">

        </div>


        <label for="">Nombre</label>
        <input type="text" class="form-control" name="nombre" value="{{ old('nombre', $beneficiario->nombre) }}">

        <label for="">Domicilio</label>
        <input type="text" class="form-control" name="domicilio" value="{{ old('domicilio', $beneficiario->domicilio) }}">
        
        <label for="">Colonia</label>
        <input type="text" class="form-control" name="colonia" value="{{ old('colonia', $beneficiario->colonia) }}">
        
        <label for="">Edad</label>
        <input type="number" class="form-control" name="edad" value="{{ old('edad', $beneficiario->edad) }}" min="0" max="100" step="1">

        <label for="">Estado civil</label>
        <select class="form-control" name="estado_civil" >
            <option value=""{{ old('estado_civil', $beneficiario->estado_civil) === '' ? 'selected' : '' }}></option>
            <option value="soltero"{{ old('estado_civil', $beneficiario->estado_civil) === 'soltero' ? 'selected' : '' }}>Soltero</option>
            <option value="casado"{{ old('estado_civil', $beneficiario->estado_civil) === 'casado' ? 'selected' : '' }}>Casado</option>
            <option value="divorciado"{{ old('estado_civil', $beneficiario->estado_civil) === 'divorciado' ? 'selected' : '' }}>Divorciado</option>
            <option value="viudo"{{ old('estado_civil', $beneficiario->estado_civil) === 'viudo' ? 'selected' : '' }}>Viudo</option>
            <option value="union libre"{{ old('estado_civil', $beneficiario->estado_civil) === 'union libre' ? 'selected' : '' }}>Union Libre</option>
        </select>

        
        <label for="">Ocupacion</label>
        <input type="text" class="form-control" name="ocupacion" value="{{ old('ocupacion', $beneficiario->ocupacion) }}" >
    
        <label for="">Fecha de nacimiento</label>
        <input type="date" class="form-control" name="fecha_nacimiento" value="{{ old('fecha_nacimiento', optional($beneficiario->fecha_nacimiento)->format('Y-m-d')) }}">
        
        <label for="">Lugar de nacimiento</label>
        <input type="text" class="form-control" name="lugar_nacimiento" value="{{ old('lugar_nacimiento', $beneficiario->lugar_nacimiento) }}" >
        

        <label for="">telefono de casa</label>
        <input type="text" class="form-control" name="telefono_casa" value="{{ old('telefono_casa', $beneficiario->telefono_casa) }}" >

        <label for="">telefono Movil</label>
        <input type="text" class="form-control" name="telefono_movil" value="{{ old('telefono_movil', $beneficiario->telefono_movil) }}" >
    
        


        @if (isset ($tasko) && $tasko=="completo")
       
        <div class="text">

        <br>
        
        <h3>Estructura Familiar</h3>

        <label for="">Nombre del conyuge</label>
        <input type="text" class="form-control" name="nombre_conyuge" value="{{ old('nombre_conyuge', $beneficiario->nombre_conyuge) }}" >

        <label for="">otro</label>
        <input type="text" class="form-control" name="otro" value="{{ old('otro', $beneficiario->otro) }}" >

        <label for="">Parentesco</label>
        <input type="text" class="form-control" name="parentesco_con" value="{{ old('parentesco_con', $beneficiario->parentesco_con) }}" >
        
        <label for="">Edad</label>
        <input type="number" class="form-control" name="edad_con" value="{{ old('edad_con', $beneficiario->edad_con) }}" min="0" max="100" step="1">
        
        <label for="">ocupacion</label>
        <input type="text" class="form-control" name="otro" value="{{ old('ocupacion_con', $beneficiario->ocupacion_con) }}" >
        

        <label for="">Estado civil</label>
        <select class="form-control" name="estado_civil_con" >
            <option value=""{{ old('estado_civil', $beneficiario->estado_civil) === '' ? 'selected' : '' }}></option>
            <option value="soltero"{{ old('estado_civil_con', $beneficiario->estado_civil_con) === 'soltero' ? 'selected' : '' }}>Soltero</option>
            <option value="casado"{{ old('estado_civil_con', $beneficiario->estado_civil_con) === 'casado' ? 'selected' : '' }}>Casado</option>
            <option value="divorciado"{{ old('estado_civil_con', $beneficiario->estado_civil_con) === 'divorciado' ? 'selected' : '' }}>Divorciado</option>
            <option value="viudo"{{ old('estado_civil_con', $beneficiario->estado_civil_con) === 'viudo' ? 'selected' : '' }}>Viudo</option>
            <option value="union libre"{{ old('estado_civil_con', $beneficiario->estado_civil_con) === 'union libre' ? 'selected' : '' }}>Union Libre</option>
        </select>

        <label for="">Escolaridad </label>
        <select class="form-control" name="escolaridad" >
            <option value=""{{ old('estado_civil', $beneficiario->estado_civil) === '' ? 'selected' : '' }}></option>
            <option value="preescolar"{{ old('escolaridad', $beneficiario->escolaridad) === 'preescolar' ? 'selected' : '' }}>Preescolar</option>
            <option value="primaria"{{ old('escolaridad', $beneficiario->escolaridad) === 'primaria' ? 'selected' : '' }}>Primaria</option>
            <option value="secundaria"{{ old('escolaridad', $beneficiario->escolaridad) === 'secundaria' ? 'selected' : '' }}>Secundaria</option>
            <option value="superior"{{ old('escolaridad', $beneficiario->escolaridad) === 'superior' ? 'selected' : '' }}>Superior</option>
            <option value="maestria"{{ old('escolaridad', $beneficiario->escolaridad) === 'maestria' ? 'selected' : '' }}>Maestria</option>
            <option value="sin estudios"{{ old('escolaridad', $beneficiario->escolaridad) === 'sin estudios' ? 'selected' : '' }}>sin estudios</option>

        </select>

        <br>
       
        <h2>HIJOS O FAMILIARES</h2>
        
 

        <label for="">nombre</label>
        <input type="text" class="form-control" name="nombre_familiar" value="{{ old('nombre_familiar', $familiar->nombre_familiar) }}">

        <label for="">Parentesco</label>
        <input type="text" class="form-control" name="parentesco_familiar" value="{{ old('parentesco_familiar', $familiar->parentesco_familiar) }}">

        <label for="">Edad</label>
        <input type="number" class="form-control" name="edad_familiar" value="{{ old('edad_familiar', $familiar->edad_familiar) }}" min="0" max="100" step="1">

        <label for="">Ocupacion</label>
        <input type="text" class="form-control" name="ocupacion_familiar" value="{{ old('ocupacion_familiar', $familiar->ocupacion_familiar) }}" >
        
        <label for="">ingreso Familiar Mensual</label>
        <input type="number" class="form-control" name="ingreso_familiar" value="{{ old('ingreso_familiar', $familiar->ingreso_familiar) }}" min="0" max="100" step="1" >

        <label for="">ingreso Total</label>
        <input type="number" class="form-control" name="total_ingreso_fam" value="{{ old('total_ingreso_fam', $familiar->total_ingreso_fam) }}" min="0" max="100" step="1" >

      


        </div>

        @endif

        @endif





        <button class="btn btn-success my-3"  type="submit">Enviar</button>

  