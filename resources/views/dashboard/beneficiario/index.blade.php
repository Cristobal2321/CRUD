@extends('dashboard.layout')
<div class="container">
  
@section('content')

<div class="card card-Tabla mt-7">
    <a class="btn btn-success my-3"  href="{{route("beneficiario.create")}}">Crear Expediente parcial</a>
    <a class="btn btn-success my-3"  href="{{route("beneficiario.completo")}}">Crear Expediente completo</a>


    <table class="table mb-3">
        <thead>

            <tr>

                <th>
                    No.expediente
                </th>

                <th>
                    Nombre
                </th>
    
                <th>
                    Tipo Expediente
                </th>
    
                <th>
                    Edad
                </th>
    
                <th>
                    
                </th>

            </tr>


    </thead>

    <tbody>
        @foreach ($beneficiarios as $b)

        <tr>

            <td>
                {{$b->id}}
            </td>

            <td>
                {{$b->nombre}}
            </td>
            <td>
                {{$b->expediente}}
            </td>

            <td>
                {{$b->edad}}
            </td>
            <td>
                <a class="my-2 btn btn-primary" href="{{route("beneficiario.edit",$b)}}">Editar</a>
                <a class="my-2 btn btn-primary" href="{{route("beneficiario.show",$b)}}">Ver</a>


                


            </td>

       
            
            
            
        </tr>
            
        @endforeach


    </tbody>
    
    </table>

    {{$beneficiarios->links()}}
</div>
</div>
@endsection

