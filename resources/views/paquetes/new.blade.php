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

<h1>NUEVO ENVIO</h1>
<form action="{{url ('paquete')}}" class="row mt-2" method="POST">
  @csrf
  <div class="col-md-8">
    <h3>Información del paquete</h3>
    <div class="form-group">
      <label for="destinatario">Destinatario</label>
      <input type="text" class="form-control" name="destinatario" placeholder="Nombre del Destinatario" autofocus >
    </div>
    <div class="form-group">
      <label for="vivienda_id">Selecciona la vivienda</label>
      <select name="vivienda_id" class="form-control">
        <option value="">Seleccione su apartamento</option>
        @foreach($viviendas as $vivienda)
          <option value="{{ $vivienda->id }}">Apto {{ $vivienda->nomenclatura }}</option>
        @endforeach
      </select>
    </div>

    <div class="form-group">
      <label for="recibido_por">Recibido por:</label>
      <input type="text" class="form-control" name="recibido_por" placeholder="A quien va dirigido" autofocus required>
    </div>

    <div class="form-group">
      <label for="entregado_a">Entregado a</label>
      <input type="text" class="form-control" name="entregado_a" >
    </div>
    
  </div>

  <div class="col-12 mt-3">
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a class="btn btn-secondary ml-2" href="{{url('paquete')}}">Cancelar</a>
  </div>
</form>


@stop
