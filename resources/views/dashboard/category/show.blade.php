@extends('dashboard.layout')

@section('content')
    <h1>{{ $category->title }}</h1>

    @include('dashboard.fragment._errors-form')
@endsection
