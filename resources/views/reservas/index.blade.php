@extends('layout')

@section('tablas')

<h1 style="margin-bottom: 20px;">CENTRO DE RESERVAS</h1>
<table class="table table-hover table-striped">
  <thead>
    <tr>
      <th>Zona Comun</th>
      <th>Fecha de reserva</th>
      <th>Hora de reserva</th>
      <th>Nombre del que reserva</th>



     
    </tr>
  </thead>
  <tbody>
    @foreach($reservas as $reserva)
    <tr>
      <td>{{$reserva->zona_comun->nombre}}</td>
      <td>{{$reserva->fecha_reserva}}</td>
      <td>{{$reserva->hora_reserva}}</td>
      <td>{{$reserva->residente->nombre}}</td>
      <form action="{{route('reserva.destroy',$reserva->id)}}" method="POST">
      @csrf
      @method('DELETE')
      <td>  <a class="btn btn-primary float-down" href="{{route('reserva.edit',$reserva->id)}}">EDITAR</a></td>
      <td><button class="btn btn-danger" onclick="return confirm('¿Realmente quiere eliminar el registro?')">Eliminar</td>
      </form>
    </tr>
    @endforeach
  </tbody>
  <a class="btn btn-primary float-down" href="{{route('reserva.create')}}" >AGREGAR RESERVAS</a>

</table>
@stop