@extends('dashboard.layout')

@section('content')

    <a class="btn btn-success my-3" href="{{route("category.create")}}">Crear</a>


    <table class="table mb-3">
        <thead>

            <tr>
                <th>
                    Titulo
                </th> 
    
                <th>
                    acciones
                </th>

            </tr>


    </thead>

    <tbody>
        @foreach ($categories as $c)

        <tr>
            <td>
                {{$c->title}}
            </td> 
            <td>
                <a class="my-2 btn btn-primary"  href="{{route("category.edit",$c)}}">Editar</a>
                <a class="my-2 btn btn-primary"  href="{{route("category.show",$c)}}">Ver</a>

                <form action="{{route("category.destroy",$c)}}" method="post">
                @method("DELETE")
                @csrf
                    <button class="btn btn-danger" type="submit">Eliminar</button>
                
                </form>
                


            </td>
 
        </tr>
            
        @endforeach


    </tbody>
    
    </table>

    {{$categories->links()}}
@endsection