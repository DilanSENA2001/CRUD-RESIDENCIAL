@extends('layout')

@section('tablas')

<h1>RESIDENTES</h1>
<table class="table table-hover table-striped">
  <thead>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Foto</th>
      <th>Movil</th>
      <th>Vivienda</th>
      <th>Nombre del propietario</th>
      <th>Movil del propietario</th>
      <th>Email del propietario</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($residentes as $residente)

    <tr>
      <td>{{$residente->id}}</td>
      <td>{{$residente->nombre}}</td>
      <td>{{$residente->foto}}</td>
      <td>{{$residente->movil}}</td>
      <td>{{$residente->vivienda->nomenclatura}}</td>
      <td>{{$residente->nombre_propietario}}</td>
      <td>{{$residente->movil_propietario}}</td>
      <td>{{$residente->email_propietario}}</td>
      <form action="{{route('residente.destroy',$residente->id)}}" method="POST">
      @csrf
      @method('DELETE')
      <td>  <a class="btn btn-primary float-down" href="{{route('residente.edit',$residente->id)}}">EDITAR</a></td>
      <td><button class="btn btn-danger" onclick="return confirm('¿Realmente quiere eliminar el registro?')">Eliminar</td>
      </form>

    </tr>
    @endforeach
  </tbody>
  <a class="btn btn-primary float-down" href="{{route('residente.create')}}" >NUEVO REGISTRO</a>
</table>
@stop