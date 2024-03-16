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

<h1>EDITAR TIPO VIVIENDA</h1>
<form action="{{route('tipo_vivienda.update',$tipo_vivienda->id)}}" class="row mt-2" method="POST">
    @csrf
    @method('PUT')
    <div class="col-md-8">

        <div class="form-group">
            <label for="nombre">Nombre del tipo de vivienda</label>
            <input type="text" class="form-control" name="nombre" value="{{$tipo_vivienda->nombre}}" placeholder="nombre de la vivienda">
        </div>

        <div class="d-flex justify-content-between mt-3">
        <input type="submit" class="btn btn-light" value="Actualizar">
            <a class="btn btn-secondary" href="{{url('tipo_vivienda')}}">Cancelar</a>
        </div>

    </div>
</form>
@stop