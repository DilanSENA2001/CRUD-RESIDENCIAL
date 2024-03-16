@extends('layout')

@section('tablas')

<h1 style="margin-bottom: 20px;">TIPOS DE VIVIENDAS</h1>
<table class="table table-hover table-striped">
  <thead>
    <tr>
      <th>Tipo de vivienda</th>


    </tr>
  </thead>
  <tbody>
    @foreach($tipos_viviendas as $tipo_vivienda)
    <tr>
      <td>{{$tipo_vivienda->nombre}}</td>
      <form action="{{route('tipo_vivienda.destroy',$tipo_vivienda->id)}}" method="POST">
      @csrf
      @method('DELETE')
      <td>  <a class="btn btn-primary float-down" href="{{route('tipo_vivienda.edit',$tipo_vivienda->id)}}">EDITAR</a></td>
      <td><button class="btn btn-danger" onclick="return confirm('¿Realmente quiere eliminar el registro?')">Eliminar</td>
      </form>
    </tr>
    @endforeach
  </tbody>
  <a class="btn btn-primary float-down" href="{{route('tipo_vivienda.create')}}" >NUEVO TIPO DE VIVIENDA</a>
</table>
@stop