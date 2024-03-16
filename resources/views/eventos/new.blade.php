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
<h1>NUEVO EVENTO</h1>
<form action="{{url ('evento')}}" class="row mt-2" method="POST">
  @csrf
  <div class="col-md-9">
    <div class="form-group">
      <label for="nombre">Nombre de la reunion</label>
      <input type="text" class="form-control" name="nombre" placeholder="Nombre de la reunion" autofocus required>
    </div>
    <div class="form-group">
      <label for="descripcion">Descripcion sobre el evento</label>
      <input type="text" class="form-control" name="descripcion" placeholder="Ingrese la descripcion del evento">
    </div>
    <div class="form-group">
      <label for="movil_usuario">Fecha del evento</label>
      <input type="date" class="form-control" name="fecha" required placeholder="Fecha del evento">
  </div>
  <div class="form-group">
      <label for="movil_usuario">Hora del evento</label>
      <input type="time" class="form-control" name="hora" placeholder="Hora del evento" required>
  </div>

  <div class="d-flex justify-content-between mt-3">
  <button type="submit" class="btn btn-primary">Guardar</button>
    <a class="btn btn-secondary" href="{{url('evento')}}">Cancelar</a>
</div>
  </form>
@stop
