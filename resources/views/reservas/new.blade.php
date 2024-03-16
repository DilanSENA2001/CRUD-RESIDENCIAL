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

<h1>NUEVO PERMISO</h1>
<form action="{{url ('reserva')}}" class="row mt-2" method="POST">
    @csrf
    <div class="col-md-8">
        <h3>Información del paquete</h3>
        <div class="form-group">
            <label for="zona_comun_id" autofocus>Selecciona el lugar</label>
            <select name="zona_comun_id" class="form-control">
                <option value="">Seleccione la zona comun</option>
                @foreach($zonas_comunes as $zona_comun)
                <option value="{{ $zona_comun->id }}">Zona{{ $zona_comun->nombre}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="fecha_reserva">Fecha de la reserva</label>
            <input type="date" class="form-control" name="fecha_reserva" placeholder="Fecha de la reserva" required>
        </div>

        <div class="form-group">
            <label for="hora_reserva">Hora de la reserva</label>
            <input type="time" class="form-control" name="hora_reserva" placeholder="Hora de la reserva" required>
        </div>


        <div class="form-group">
        <label for="residente_id" autofocus>Seleccione el residente</label>
        <select name="residente_id" class="form-control">
            <option value="">Seleccione el residente</option>
            @foreach($residentes as $residente)
            <option value="{{ $residente->id }}">{{ $residente->nombre}}</option>
            @endforeach
        </select>
        
    </div>

    </div>
    <input type="hidden" name="estado" value="0" >

    <div class="col-12 mt-3">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a class="btn btn-secondary ml-2" href="{{url('reserva')}}">Cancelar</a>
    </div>


</form>


@stop