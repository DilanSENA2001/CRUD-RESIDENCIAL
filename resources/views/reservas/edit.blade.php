@extends('layout')
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- plugins:css -->
<link rel="stylesheet" href="../../assets/vendors/feather/feather.css">
<link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
<link rel="stylesheet" href="../../assets/vendors/ti-icons/css/themify-icons.css">
<link rel="stylesheet" href="../../assets/vendors/typicons/typicons.css">
<link rel="stylesheet" href="../../assets/vendors/simple-line-icons/css/simple-line-icons.css">
<link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
<!-- endinject -->
<!-- Plugin css for this page -->
<link rel="stylesheet" href="../../assets/vendors/select2/select2.min.css">
<link rel="stylesheet" href="../../assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
<!-- End plugin css for this page -->
<!-- inject:css -->
<link rel="stylesheet" href="../../assets/css/vertical-layout-light/style.css">
<!-- endinject -->
<link rel="shortcut icon" href="../../assets/images/favicon.png" />
@section('tablas')
<h1>EDITAR RESERVA</h1>
<form action="{{route('reserva.update',$reserva->id)}}" class="row mt-2" method="POST">
  @csrf
  @method('PUT')
  <div class="col-md-8">


    <div class="form-group">
      <label for="nombre">Zona comun de la reserva</label>
      <select name="zona_comun" class="form-control" required>
        <option value="">Seleccione su zona</option>
        @foreach($zonas_comunes as $zona_comun)
        @if($zona_comun->id == $reserva->zona_comun->id)
        <option value="{{ $zona_comun->id }}" selected>Zona {{ $zona_comun->nombre }}</option>
        @else
        <option value="{{ $zona_comun->id }}">Zona {{ $zona_comun->nombre }}</option>
        @endif
        @endforeach
      </select>

    </div>

    <div class="form-group">
      <label for="nombre">Fecha de la reserva</label>
      <input type="date" class="form-control" name="fecha_reserva" value="{{$reserva->fecha_reserva}}" placeholder="Fecha" autofocus required>
    </div>

    <div class="form-group">
      <label for="nombre">Hora de la reserva</label>
      <input type="time" class="form-control" name="hora_reserva" value="{{$reserva->hora_reserva}}" placeholder="Hora de la reserva" autofocus required>
    </div>

    <div class="form-group">
      <label for="nombre">Nombre del reservante</label>
      <input type="text" class="form-control" name="nombre" value="{{$reserva->residente->nombre}}" placeholder="Nombre" autofocus required>
    </div>

    <div class="d-flex justify-content-between mt-3">
      <input type="submit" class="btn btn-light" value="Actualizar">
      <a class="btn btn-secondary" href="{{url('permiso')}}">Cancelar</a>
    </div>
</form>
@stop