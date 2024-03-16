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
<h1>EDITAR PAQUETES</h1>
<form action="{{route('evento.update',$evento->id)}}" class="row mt-2" method="POST">
    @csrf
    @method('PUT')
  <div class="col-md-8">
    <div class="form-group">
      <label for="nombre">Nombre del evento</label>
      <input type="text" class="form-control" name="nombre" value="{{$evento->nombre}}" placeholder="Nombre del evento" autofocus required>
    </div>

    <div class="form-group">
      <label for="nombre">Descripcion</label>
      <input type="text" class="form-control" name="descripcion" value="{{$evento->descripcion}}" placeholder="Descripcion del evento"required>
    </div>

    <div class="form-group">
      <label for="nombre">Fecha del evento</label>
      <input type="date" class="form-control" name="fecha" value="{{$evento->fecha}}" placeholder="Nombre de la vivienda"  required>
    </div>

    <div class="form-group">
      <label for="nombre">Hora del evento</label>
      <input type="time" class="form-control" name="hora" value="{{$evento->hora}}" placeholder="hora del evento"  required>
    </div>

    <div class="d-flex justify-content-between mt-3">
        <input type="submit" class="btn btn-light" value="Actualizar">
         <a class="btn btn-secondary" href="{{url('evento')}}">Cancelar</a>
    </div>
  </form>
@stop
