@extends('layout')

@section('tablas')

<h1 style="margin-bottom: 20px;">MENSAJERIA</h1>
<table class="table table-hover table-striped">
  <thead>
    <tr>
      <th>Destinatario</th>
      <th>Vivienda</th>
      <th>Recibido por:</th>
      <th>Entragado a:</th>

     
    </tr>
  </thead>
  <tbody>
    @foreach($paquetes as $paquete)

    <tr>
      <td>{{$paquete->destinatario}}</td>
      <td>{{$paquete->vivienda->nomenclatura}}</td>
      <td>{{$paquete->recibido_por}}</td>
      <td>{{$paquete->entregado_a}}</td>
      <form action="{{route('paquete.destroy',$paquete->id)}}" method="POST">
      @csrf
      @method('DELETE')
      <td>  <a class="btn btn-primary float-down" href="{{route('paquete.edit',$paquete->id)}}">EDITAR</a></td>
      <td><button class="btn btn-danger" onclick="return confirm('¿Realmente quiere eliminar el registro?')">Eliminar</td>
      </form>
    </tr>
    @endforeach
  </tbody>
  <a class="btn btn-primary float-down" href="{{route('paquete.create')}}" >NUEVO PAQUETE</a>
</table>
@stop