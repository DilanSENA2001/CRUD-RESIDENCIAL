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

<style>
  .error {
    
    color: red;
    text-align: center;
    font-size: 1.1rem; /* Reducir el tamaño de fuente */
    padding: 8px 15px; /* Aumentar el espacio alrededor del mensaje */
    border: 2px solid red; /* Aumentar el grosor del borde */
    border-radius: 5px; /* Reducir el radio de borde */
    margin-bottom: 10px;
  
  }
</style>

  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <h1>App Residencial</h1>
              </div>
              <h4>Hola! Bienvenido a nuestra App</h4>
              <h6 class="fw-light">Inicia secion para continuar.</h6>
              <form class="pt-3" method="POST" action="check">

                @csrf

                <div class="error">
                  @error('email')
                  {{$message}}
                  @enderror

                </div>

                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username" name="email" required autofocus value="{{old('email')}}">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name="password">
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-primary">INGRESAR</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                </div>
                
                <div class="text-center mt-4 fw-light">
                  No tienes cuenta? <a href="register" class="text-primary">Registrate</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  
