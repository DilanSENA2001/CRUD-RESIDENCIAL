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
<form action="{{route('paquete.update',$paquete->id)}}" class="row mt-2" method="POST">
    @csrf
    @method('PUT')
  <div class="col-md-8">
    <div class="form-group">
      <label for="nombre">Nombre del destinatario</label>
      <input type="text" class="form-control" name="destinatario" value="{{$paquete->destinatario}}" placeholder="Nombre de la vivienda" autofocus required>
    </div>

    <div class="form-group">
      <label for="vivienda_id">vivienda</label>
      <select name="vivienda_id" class="form-control" required>
        <option value="">Seleccione su vivienda</option>
        @foreach($viviendas as $vivienda)
        @if($vivienda->id == $paquete->vivienda->id)
        <option value="{{ $vivienda->id }}" selected>Zona {{ $vivienda->nomenclatura }}</option>
        @else
        <option value="{{ $vivienda->id }}">Zona {{ $vivienda->nomenclatura }}</option>
        @endif
        @endforeach
      </select>



    <div class="form-group">
      <label for="nombre">Recibido por</label>
      <input type="text" class="form-control" name="recibido_por" value="{{$paquete->recibido_por}}" placeholder="Nombre de la vivienda" autofocus required>
    </div>

    <div class="form-group">
      <label for="nombre">Entregado a</label>
      <input type="text" class="form-control" name="entregado_a" value="{{$paquete->entregado_a}}" placeholder="Nombre de la vivienda" autofocus required>
    </div>

    <div class="d-flex justify-content-between mt-3">
        <input type="submit" class="btn btn-light" value="Actualizar">
         <a class="btn btn-secondary" href="{{url('paquete')}}">Cancelar</a>
    </div>
  </form>
@stop
