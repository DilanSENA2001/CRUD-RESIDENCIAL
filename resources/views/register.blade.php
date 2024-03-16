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
<!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row" style="justify-content: center;">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">AppResidencial</h4>
                            <p class="card-description">
                                Ingresa tus datos
                            </p>
                            <form class="forms-sample" method="POST" action="register">
                            @csrf
                                <div class="form-group">
                                    <label for="nombre">Nombre de usuario</label>
                                    <input type="text" class="form-control" name="nombre" placeholder="Nombre de usuario">
                                </div>
                                <div class="form-group">
                                    <label for="email">Correo electronico</label>
                                    <input type="email" class="form-control" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Contraseña</label>
                                    <input type="password" class="form-control" name="password" placeholder="Contraseña">
                                </div>
                                <div class="form-check form-check-flat form-check-primary">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input">
                                        Remember me
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                                <button class="btn btn-light">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </form>
