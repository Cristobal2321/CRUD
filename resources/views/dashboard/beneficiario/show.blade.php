@extends('dashboard.layout')

        
@section('content')

<div class="container">
    <div class="card card-show mt-7">

<div id = a1>
         <p>No. Expediente :{{$beneficiario->id}} <p>
         <p>Registro : {{$beneficiario->created_at}}</p>
         <p>Parroquia : {{$beneficiario->parroquia}}<p>
        <p>Asunto : {{$beneficiario->asunto}}<p>
</div>

    <div id = nombre>

    <h5> DATOS PERSONALES </h5>

    
    <h4> Nombre : {{$beneficiario->nombre}}</h4>
    <h4> Domicilio : {{$beneficiario->domicilio}}</h4>
    <h4> Edad : {{$beneficiario->edad}}</h4>
    <h4> Estado Civil : {{$beneficiario->estado_civil}}</h4>
    <h4> Ocupacion : {{$beneficiario->ocupacion}}</h4>
    <h4> Fecha de Nacimiento : {{$beneficiario->fecha_nacimiento}}</h4>
    <h4> Lugar de Nacimiento : {{$beneficiario->lugar_nacimiento}}</h4>
    <h4> Telefono de Casa : {{$beneficiario->telefono_casa}}</h4>
    <h4> Telefono Movil : {{$beneficiario->telefono_movil}}</h4>


    </div>

    <br>
    @if($beneficiario->expediente === "completo")
        <div id = nombre>
            
            <h5> ESTRUCTURA FAMILIAR. </h5>
        
            <h4> Nombre de conyuge : {{$beneficiario->nombre_conyuge}}</h4>
            <h4> Otro : {{$beneficiario->otro}}</h4>
            <h4> Parentesco : {{$beneficiario->parentesco_con}}</h4>
            <h4> Estado Civil : {{$beneficiario->estado_civil_con}}</h4>
            <h4> Ocupacion : {{$beneficiario->ocupacion}}</h4>
            <h4> Parentezco : {{$beneficiario->parentesco_con}}</h4>
            <h4> Lugar de Nacimiento : {{$beneficiario->lugar_nacimiento}}</h4>
            <h4> Telefono de Casa : {{$beneficiario->telefono_casa}}</h4>
            <h4> Telefono Movil : {{$beneficiario->telefono_movil}}</h4>
        
        
            </div>
    @endif


    </div>
</div>


    @include('dashboard.fragment._errors-form')
@endsection
