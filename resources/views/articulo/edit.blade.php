@extends('layouts.plantillabase')

@section('contenido')
<h2>EDITAR REGISTROS</h2>

<form action="/articulos/{{$articulo->id}}" method="POST">
    @csrf    
    @method('PUT')
  <div class="wrapper">
        <div class="title">
        </div>
      
        <form class="form">
          <input id="codigo" name="codigo" type="text" class="name entry " tabindex="1" placeholder="Plato" value="{{$articulo->codigo}}"/>
          
          <input id="cantidad" name="stock" type="number" tabindex="3" class="email entry" placeholder="Cantidad" value="{{$articulo->stock}}"/>
          <input id="precio" name="precio"  type="number" step="any" value="0.00" tabindex="3" class="email entry" placeholder="Precio" value="{{$articulo->precio}}"/>

          
          <textarea id="descripcion" name="descripcion" class="message entry" tabindex="2" placeholder="Descripcion" value="{{$articulo->descripcion}}"></textarea> 
          
          <button class="submit entry" onclick="thanks()">Submit</button>
        </form>  
        
        <div class="shadow"></div>
      </div>
      <img src="https://i.postimg.cc/3x6TJ7Bb/descarga-1.jpg" class="css-class" alt="alt text">

</form>

@endsection