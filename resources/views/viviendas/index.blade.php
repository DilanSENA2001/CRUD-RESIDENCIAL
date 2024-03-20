@extends('layout')

@section('tablas')

<h1 style="margin-bottom: 20px;">VIVIENDAS</h1>
<table class="table table-hover table-striped">
  <thead>
    <tr>
    <th>Bloque</th>
      <th>Nomenclatura</th>
      <th>Estado</th>
      <th>Telefono</th>
     
    </tr>
  </thead>
  <tbody>
    @foreach($viviendas as $vivienda)

    <tr>
    <td>{{$vivienda->bloque->nombre}}</td>
      <td>{{$vivienda->nomenclatura}}</td>
      <td>{{$vivienda->estado}}</td>
      <td>{{$vivienda->telefono}}</td>
      <form action="{{route('vivienda.destroy',$vivienda->id)}}" method="POST">
        @csrf
        @method('DELETE')
      <td> <a class="btn btn-primary float-down" href="{{route('vivienda.edit',$vivienda->id)}}">EDITAR</a></td>
      <td>
        <button class="btn btn-danger" onclick="return confirm('¿Realmente quiere eliminar el registro?')">Eliminar</td>
        </form>
    </tr>
    @endforeach
  </tbody>
  <a class="btn btn-primary float-down" href="{{route('vivienda.create')}}" >NUEVA VIVIENDA</a>
</table>
@stop