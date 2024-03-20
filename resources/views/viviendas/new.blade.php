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

<h1>NUEVAS VIVIENDAS</h1>
<form action="{{url ('vivienda')}}" class="row mt-2" method="POST">
    @csrf
    <div class="col-md-6">

        <div class="form-group">
            <label for="bloque_id">Selecciona el bloque</label>
            <select name="bloque_id" class="form-control" required>
                <option value="">Seleccione su bloque</option>
                @foreach($bloques as $bloque)
                <option value="{{ $bloque->id }}">Apto {{ $bloque->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="nomenclatura">Nomenclatura</label>
            @error('nomenclatura')
             {{$message}}
            @enderror
            <input type="text" class="form-control" name="nomenclatura" placeholder="Nomenclatura" required>
        </div>

        <div class="form-group">
            <label for="telefono">Telefono</label>
            <input type="number" class="form-control" name="telefono" required>
        </div>
    </div>
    <div class="col-12 mt-3">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a class="btn btn-secondary ml-2" href="{{url('vivienda')}}">Cancelar</a>
    </div>
</form>


@stop