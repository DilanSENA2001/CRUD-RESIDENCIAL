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
<h1>EDITAR RESIDENTE|</h1>
<form action="{{route('residente.update',$residente->id)}}" class="row mt-2" method="POST">
    @csrf
    @method('PUT')
    <div class="col-md-8">


        <div class="form-group">
            <label for="nombre">Nombre del residente</label>
            <input type="text" class="form-control" name="nombre" value="{{$residente->nombre}}" placeholder="Fecha" autofocus required>
        </div>

        <div class="form-group">
            <label for="nombre">Movil del usuario</label>
            <input type="number" class="form-control" name="movil" value="{{$residente->movil}}" placeholder="Movil del usuario" autofocus required>
        </div>

        <div class="form-group">
            <label for="nombre">Nomenclatura de la residencia </label>
            <select name="vivienda_id" class="form-control" required>
                <option value="">Seleccione su vivienda</option>
                @foreach($viviendas as $vivienda)
                @if($vivienda->id == $residente->vivienda->id)
                <option value="{{ $vivienda->id }}" selected>apto {{ $vivienda->nomenclatura }}</option>
                @else
                <option value="{{ $vivienda->id }}">apto {{ $vivienda->nomenclatura }}</option>
                @endif
                @endforeach
            </select>

        </div>

        <div class="form-group">
            <label for="nombre">Nombre del propietario</label>
            <input type="text" class="form-control" name="nombre_propietario" value="{{$residente->nombre_propietario}}" placeholder="Nombre propietario" required>
        </div>

        <div class="form-group">
            <label for="movil_propietario">Movil del propietario</label>
            <input type="number" class="form-control" name="movil_propietario" value="{{$residente->movil_propietario}}" placeholder="Movil propietario" required>
        </div>

        <div class="form-group">
            <label for="email_propietario">Email del propietorio</label>
            <input type="email" class="form-control" name="email_propietario" value="{{$residente->email_propietario}}" placeholder="email_propietario" required>
        </div>

        <div class="d-flex justify-content-between mt-3">
            <input type="submit" class="btn btn-light" value="Actualizar">
            <a class="btn btn-secondary" href="{{url('residente')}}">Cancelar</a>
        </div>
</form>
@stop