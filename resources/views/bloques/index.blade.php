@extends('layout')

@section('tablas')

<h1 style="margin-bottom: 20px;">BLOQUES</h1>
<table class="table table-hover table-striped">
  <thead>
    <tr>
      <th>Torre</th>
     
    </tr>
  </thead>
  <tbody>
    @foreach($bloques as $bloque)
    <tr>
      <td>{{$bloque->nombre}}</td>
      <form action="{{route('bloque.destroy',$bloque->id)}}" method="POST">
      @csrf
      @method('DELETE')
      <td>  <a class="btn btn-primary float-down" href="{{route('bloque.edit',$bloque->id)}}">EDITAR</a></td>
      <td><button class="btn btn-danger" onclick="return confirm('¿Realmente quiere eliminar el registro?')">Eliminar</td>
      </form>
    </tr>
    @endforeach
  </tbody>

  <a class="btn btn-primary float-down" href="{{route('bloque.create')}}" >NUEVO BLOQUE</a>
</table>
@stop