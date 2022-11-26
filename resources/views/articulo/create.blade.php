@extends('layouts.plantillabase')

@section('contenido')
<h2>CREAR COMANDA</h2>

<form action="/articulos" method="POST">
    @csrf
    <div class="wrapper">
        <div class="title">
        </div>
      
        <form class="form">
          <input id="codigo" name="codigo" type="text" class="name entry " tabindex="1" placeholder="Plato"/>
          
          <input id="cantidad" name="stock" type="number" tabindex="3" class="email entry" placeholder="Cantidad"/>
          <input id="precio" name="precio"  type="number" step="any" value="0.00" tabindex="3" class="email entry" placeholder="Precio"/>

          
          <textarea id="descripcion" name="descripcion" class="message entry" tabindex="2" placeholder="Descripcion"></textarea> 
          
          <button class="submit entry" onclick="thanks()">Submit</button>
        </form>  
        
        <div class="shadow"></div>
        <img src="https://i.postimg.cc/3x6TJ7Bb/descarga-1.jpg" alt="profile Pic" height="200" width="200">
        <img src="https://i.postimg.cc/k5rpp5w9/pachamanca-comida.jpg" alt="profile Pic" height="200" width="200">
        <img src="https://i.postimg.cc/rmRCXGpP/descarga-2.jpg" alt="profile Pic" height="200" width="200">
        <img src="https://i.postimg.cc/ncJKgDf3/descarga-3.jpg" alt="profile Pic" height="200" width="200">





      </div>
</form>

@endsection