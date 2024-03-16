@extends('layout')

@section('tablas')

<h1 style="margin-bottom: 20px;">EVENTOS INTEGRALES</h1>
<table class="table table-hover table-striped">
  <thead>
    <tr>
      <th>Nombre de la reunion</th>
      <th>Descripcion del evento</th>
      <th>Fecha</th>
      <th>Hora</th>
      
      
    </tr>
  </thead>
  <tbody>
    @foreach($eventos as $evento)

    <tr>
      <td>{{$evento->nombre}}</td>
      <td>{{$evento->descripcion}}</td>
      <td>{{$evento->fecha}}</td>
      <td>{{$evento->hora}}</td>
      <form action="{{route('evento.destroy',$evento->id)}}" method="POST">
      @csrf
      @method('DELETE')
      <td><a class="btn btn-primary float-down" href="{{route('evento.edit',$evento->id)}}">EDITAR</a></td>
      <td><button class="btn btn-danger" onclick="return confirm('¿Realmente quiere eliminar el registro?')">Eliminar</td>
      </form>
    </tr>
    @endforeach
  </tbody>
  <a class="btn btn-primary float-down" href="{{route('evento.create')}}" >NUEVO EVENTO</a>

</table>
@stop