@extends('layouts.plantillabase');

@section('contenido')
<a href="articulos/create" class="btn btn-primary btn-lg active btn-block">CREAR</a>

<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Codigo</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($articulos as $articulo)
        <tr>
            <td>{{ $articulo->id}}</td>
            <td>{{ $articulo->codigo}}</td>
            <td>{{ $articulo->descripcion}}</td>
            <td>{{ $articulo->stock}}</td>
            <td>{{ $articulo->precio}}</td>
            <td>
                <form action="{{ route ('articulos.destroy',$articulo->id)}}" method="POST">
                    <a href="/articulos/{{$articulo->id}}/edit" class="btn btn-info">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>

@endsection