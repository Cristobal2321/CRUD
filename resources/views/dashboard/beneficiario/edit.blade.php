@extends('dashboard.layout')

@section('content')

    @include('dashboard.fragment._errors-form')

    <form action="{{ route('beneficiario.update', $beneficiario->id) }}" method="post" enctype="multipart/form-data">


        @method('PATCH')

       
        <div class="container">
            <div class="card card-create2 mt-7">

                <h1>Modificar beneficiario:{{ $beneficiario->title }}</h1>

                @include('dashboard.beneficiario._form',["task" => "edit"])
            </div>
        </div>

    </form>
@endsection
