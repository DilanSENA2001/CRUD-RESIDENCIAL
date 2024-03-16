@extends('layout')

@section('tablas')

<h1 style="margin-bottom: 20px;">Zona de encuentro</h1>
<table class="table table-hover table-striped">
  <thead>
    <tr>
      <th>Nombre del lugar</th>
    </tr>
  </thead>
  <tbody>
    @foreach($zonas_comunes as $zona_comun)

    <tr>
      <td>{{$zona_comun->nombre}}</td>
      <form action="{{route('zona_comun.destroy',$zona_comun->id)}}" method="post">
      @csrf
      @method('DELETE')
      <td>  <a class="btn btn-primary float-down" href="{{route('zona_comun.edit',$zona_comun->id)}}">EDITAR</a></td>
      <td><button class="btn btn-danger" onclick="return confirm('¿Realmente quiere eliminar el registro?')">Eliminar</td>
    </form>
    </tr>
    @endforeach
  </tbody>
  <a class="btn btn-primary float-down" href="{{route('zona_comun.create')}}" >NUEVO REGISTRO</a>
</table>
@stop