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

<h1>NUEVOS RESIDENTES</h1>
<form action="{{url ('residente')}}" class="row mt-2" method="POST">
  @csrf
  <div class="col-md-6">
    <h3>Información del Residente</h3>
    <div class="form-group">
      <label for="nombre">Nombre del residente</label>
      <input type="text" class="form-control" name="nombre" placeholder="Nombre del residente" autofocus required>
    </div>
    <div class="form-group">
      <label for="foto">Foto</label>
      <input type="file" class="form-control" name="foto">
    </div>
    <div class="form-group">
      <label for="movil_usuario">Móvil del usuario</label>
      <input type="tel" class="form-control" name="movil" required>
    </div>
    <div class="form-group">
      <label for="vivienda_id">Selecciona la vivienda</label>
      <select name="vivienda_id" class="form-control" required>
        <option value="">Seleccione su apartamento</option>
        @foreach($viviendas as $vivienda)
          <option value="{{ $vivienda->id }}">Apto {{ $vivienda->nomenclatura }}</option>
        @endforeach
      </select>
    </div>
  </div>

  <div class="col-md-6">
    <h3>Información del Propietario</h3>
    <div class="form-group">
      <label for="nombre_propietario">Nombre del propietario</label>
      <input type="text" class="form-control" name="nombre_propietario" placeholder="Nombre del propietario">
    </div>
    <div class="form-group">
      <label for="movil_propietario">Móvil del propietario</label>
      <input type="tel" class="form-control" name="movil_propietario">
    </div>
    <div class="form-group">
      <label for="email_propietario">Email del propietario</label>
      <input type="email" class="form-control" name="email" placeholder="Email del propietario">
    </div>
  </div>

  <div class="col-12 mt-3">
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a class="btn btn-secondary ml-2" href="{{url('residente')}}">Cancelar</a>
  </div>
</form>


@stop
