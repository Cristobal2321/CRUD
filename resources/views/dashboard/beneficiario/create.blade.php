@extends('dashboard.layout')

@section('content')

   
    @include('dashboard.fragment._errors-form')

    <form action="{{ route('beneficiario.store') }}" method="post">
        
        <div class="container">
            <div class="card card-create2 mt-7">
                <h1>Expediente Parcial de Beneficiario</h1>
                @include('dashboard.beneficiario._form',["tas" => "parcial"])
            </div>
        </div>

    </form>
@endsection
