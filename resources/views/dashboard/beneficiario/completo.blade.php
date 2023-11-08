@extends('dashboard.layout')

@section('content')
<div class="container">
    <div class="card card-create mt-7">


    <h1>Expediente completo de beneficiario:{{ $beneficiario->title }}</h1>
    @include('dashboard.fragment._errors-form')

    <form action="{{ route('beneficiario.store') }}" method="post">


        @include('dashboard.beneficiario._form',["tasko" => "completo"])


    </form>

</div>
</div>
@endsection
