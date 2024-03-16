@extends('layout')

@section('tablas')

<h1 style="margin-bottom: 20px;">PERMISOS DE INGRESOS</h1>
<table class="table table-hover table-striped">
  <thead>
    <tr>
      <th>Numero de vivienda</th>
      <th>Nombre del visitante</th>
      <th>Documento del visitante</th>
     
    </tr>
  </thead>
  <tbody>
    @foreach($permisos as $permiso)

    <tr>
      <td>{{$permiso->vivienda->nomenclatura}}</td>
      <td>{{$permiso->nombre_visitante}}</td>
      <td>{{$permiso->documento_visitante}}</td>
      <form action="{{route('permiso.destroy',$permiso->id)}}" method="POST">
      @csrf
      @method('DELETE')
      <td>  <a class="btn btn-primary float-down" href="{{route('permiso.edit',$permiso->id)}}">EDITAR</a></td>
      <td><button class="btn btn-danger" onclick="return confirm('¿Realmente quiere eliminar el registro?')">Eliminar</td>
      </form>
    </tr>
    @endforeach
  </tbody>
  <a class="btn btn-primary float-down" href="{{route('permiso.create')}}" >AGREGAR PERMISO</a>
</table>
@stop