<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>APP RESIDENCIAL </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ url('assets/vendors/feather/feather.css') }}">
  <link rel="stylesheet" href="{{ url('assets/vendors/feather/feather.css') }}">
  <link rel="stylesheet" href="{{ url('assets/vendors/feather/feather.css') }}">
  <link rel="stylesheet" href="{{ url('assets/vendors/feather/feather.css') }}">
  <link rel="stylesheet" href="{{ url('assets/vendors/feather/feather.css') }}">
  <link rel="stylesheet" href="{{ url('assets/vendors/feather/feather.css') }}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" type="text/css" href="assets/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="assets/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="assets/images/favicon.png" />
</head>

<body class="with-welcome-text">
  <div class="container-scroller">
    <div class="row p-0 m-0 proBanner" id="proBanner">
      <div class="col-md-12 p-0 m-0">
        <div class="card-body card-body-padding px-3 d-flex align-items-center justify-content-between">
          <div class="ps-lg-3">
            <div class="d-flex align-items-center justify-content-between">
              <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with
                this template!</p>
              <a href="https://www.bootstrapdash.com/product/star-admin-pro/" target="_blank" class="btn me-2 buy-now-btn border-0">Buy Now</a>
            </div>
          </div>
          <div class="d-flex align-items-center justify-content-between">
            <a href="https://www.bootstrapdash.com/product/star-admin-pro/"><i class="ti-home me-3 text-white"></i></a>
            <button id="bannerClose" class="btn border-0 p-0">
              <i class="ti-close text-white"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="../index.html">
            <img src="../assets/images/logo.svg" alt="logo" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="../index.html">
            <img src="../assets/images/logo-mini.svg" alt="logo" />
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top">
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text">BIENVENIDOS A NUESTRA APP <span class="text-black fw-bold">RESIDENCIAL</span></h1>
            <h3 class="welcome-sub-text">SENA ADSO-8 CEAI </h3>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item dropdown d-none d-lg-block">
            <a class="nav-link dropdown-bordered dropdown-toggle dropdown-toggle-split" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false"> Select Category </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
              <a class="dropdown-item py-3">
                <p class="mb-0 font-weight-medium float-left">Select category</p>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Bootstrap Bundle </p>
                  <p class="fw-light small-text mb-0">This is a Bundle featuring 16 unique dashboards</p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Angular Bundle</p>
                  <p class="fw-light small-text mb-0">Everything you’ll ever need for your Angular projects</p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">VUE Bundle</p>
                  <p class="fw-light small-text mb-0">Bundle of 6 Premium Vue Admin Dashboard</p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">React Bundle</p>
                  <p class="fw-light small-text mb-0">Bundle of 8 Premium React Admin Dashboard</p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item d-none d-lg-block">
            <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
              <span class="input-group-addon input-group-prepend border-right">
                <span class="icon-calendar input-group-text calendar-icon"></span>
              </span>
              <input type="text" class="form-control">
            </div>
          </li>
          <li class="nav-item">
            <form class="search-form" action="#">
              <i class="icon-search"></i>
              <input type="search" class="form-control" placeholder="Search Here" title="Search here">
            </form>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
              <i class="icon-bell"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
              <a class="dropdown-item py-3 border-bottom">
                <p class="mb-0 font-weight-medium float-left">You have 4 new notifications </p>
                <span class="badge badge-pill badge-primary float-right">View all</span>
              </a>
              <a class="dropdown-item preview-item py-3">
                <div class="preview-thumbnail">
                  <i class="mdi mdi-alert m-auto text-primary"></i>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject fw-normal text-dark mb-1">Application Error</h6>
                  <p class="fw-light small-text mb-0"> Just now </p>
                </div>
              </a>
              <a class="dropdown-item preview-item py-3">
                <div class="preview-thumbnail">
                  <i class="mdi mdi-settings m-auto text-primary"></i>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject fw-normal text-dark mb-1">Settings</h6>
                  <p class="fw-light small-text mb-0"> Private message </p>
                </div>
              </a>
              <a class="dropdown-item preview-item py-3">
                <div class="preview-thumbnail">
                  <i class="mdi mdi-airballoon m-auto text-primary"></i>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject fw-normal text-dark mb-1">New user registration</h6>
                  <p class="fw-light small-text mb-0"> 2 days ago </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator" id="countDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="icon-mail icon-lg"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="countDropdown">
              <a class="dropdown-item py-3">
                <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                <span class="badge badge-pill badge-primary float-right">View all</span>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="../assets/images/faces/face10.jpg" alt="image" class="img-sm profile-pic">
                </div>
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                  <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="../assets/images/faces/face12.jpg" alt="image" class="img-sm profile-pic">
                </div>
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                  <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="../assets/images/faces/face1.jpg" alt="image" class="img-sm profile-pic">
                </div>
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                  <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown d-none d-lg-block user-dropdown">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" src="../assets/images/faces/face8.jpg" alt="Profile image"> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-md rounded-circle" src="../assets/images/faces/face8.jpg" alt="Profile image">
                <p class="mb-1 mt-3 font-weight-semibold">Allen Moreno</p>
                <p class="fw-light text-muted mb-0">allenmoreno@gmail.com</p>
              </div>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My
                Profile <span class="badge badge-pill badge-danger">1</span></a>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-message-text-outline text-primary me-2"></i>
                Messages</a>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-calendar-check-outline text-primary me-2"></i>
                Activity</a>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2"></i>
                FAQ</a>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme">
            <div class="img-ss rounded-circle bg-light border me-3"></div>Light
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border me-3"></div>Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
              </ul>
            </div>
            <h4 class="px-3 text-muted mt-5 fw-light mb-0">Events</h4>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary me-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
              <p class="text-gray mb-0">The total number of sessions</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary me-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 fw-normal">See All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="../assets/images/faces/face1.jpg" alt="image"><span class="online"></span>
                </div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../assets/images/faces/face2.jpg" alt="image"><span class="offline"></span>
                </div>
                <div class="info">
                  <div class="wrapper d-flex">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                <small class="text-muted my-auto">23 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../assets/images/faces/face3.jpg" alt="image"><span class="online"></span>
                </div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../assets/images/faces/face4.jpg" alt="image"><span class="offline"></span>
                </div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../assets/images/faces/face5.jpg" alt="image"><span class="online"></span>
                </div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../assets/images/faces/face6.jpg" alt="image"><span class="online"></span>
                </div>
                <div class="info">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- zona de menu de las vistas-->

      <!-- zona de menu de residentes-->

      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('residente.index') }}">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="width: 20px; height: 20px; margin-right: 8px;">
                <title>account-box-outline</title>
                <path d="M19,19H5V5H19M19,3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M16.5,16.25C16.5,14.75 13.5,14 12,14C10.5,14 7.5,14.75 7.5,16.25V17H16.5M12,12.25A2.25,2.25 0 0,0 14.25,10A2.25,2.25 0 0,0 12,7.75A2.25,2.25 0 0,0 9.75,10A2.25,2.25 0 0,0 12,12.25Z" />
              </svg>
              <span class="menu-title" style="margin-right: 20px;">RESIDENTES</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('bloque.index') }}">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="width: 20px; height: 20px; margin-right: 8px;">
                <title>home-city-outline</title>
                <path d="M10,2V4.26L12,5.59V4H22V19H17V21H24V2H10M7.5,5L0,10V21H15V10L7.5,5M14,6V6.93L15.61,8H16V6H14M18,6V8H20V6H18M7.5,7.5L13,11V19H10V13H5V19H2V11L7.5,7.5M18,10V12H20V10H18M18,14V16H20V14H18Z" />
              </svg>
              <span class="menu-title" style="margin-right: 20px;">BLOQUES</span>
            </a>
          </li>

          <!--viviendas-->

          <li class="nav-item">
            <a class="nav-link" href="{{ route('vivienda.index') }}">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="width: 20px; height: 20px; margin-right: 8px;">
                <title>home-outline</title>
                <path d="M12 5.69L17 10.19V18H15V12H9V18H7V10.19L12 5.69M12 3L2 12H5V20H11V14H13V20H19V12H22" />
              </svg>
              <span class="menu-title" style="margin-right: 20px;">VIVIENDAS</span>
            </a>
          </li>
          <!--PERMISOS-->

          <li class="nav-item">
            <a class="nav-link" href="{{ route('permiso.index') }}">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="width: 20px; height: 20px; margin-right: 8px;">
                <title>calendar-month-outline</title>
                <path d="M7 11H9V13H7V11M21 5V19C21 20.11 20.11 21 19 21H5C3.89 21 3 20.1 3 19V5C3 3.9 3.9 3 5 3H6V1H8V3H16V1H18V3H19C20.11 3 21 3.9 21 5M5 7H19V5H5V7M19 19V9H5V19H19M15 13V11H17V13H15M11 13V11H13V13H11M7 15H9V17H7V15M15 17V15H17V17H15M11 17V15H13V17H11Z" />
              </svg>
              <span class="menu-title" style="margin-right: 20px;">PERMISOS</span>
            </a>
          </li>
          <!--Paquetes-->

          <li class="nav-item">
            <a class="nav-link" href="{{ route('paquete.index') }}">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="width: 20px; height: 20px; margin-right: 8px;">
                <title>gift-open-outline</title>
                <path d="M22 10.87L19.26 9.28C19.5 9.07 19.73 8.8 19.9 8.5C20.73 7.07 20.24 5.23 18.8 4.4C17.94 3.9 16.93 3.9 16.08 4.26L16.09 4.25L15.21 4.64L15.1 3.68L15.09 3.69C15 2.78 14.47 1.9 13.61 1.4C12.17 .575 10.34 1.07 9.5 2.5C9.33 2.8 9.22 3.13 9.16 3.45L6.41 1.87C5.45 1.32 4.23 1.64 3.68 2.6L2.18 5.2C1.9 5.68 2.07 6.29 2.55 6.56L4.28 7.56L8.5 10H2V20C2 21.11 2.9 22 4 22H20C21.11 22 22 21.11 22 20V14.87L22.73 13.6C23.28 12.64 22.96 11.42 22 10.87M16.44 6.5C16.71 6 17.33 5.86 17.8 6.13C18.28 6.41 18.45 7 18.17 7.5C17.89 8 17.28 8.14 16.8 7.87C16.33 7.59 16.16 7 16.44 6.5M14.07 8.6L21 12.6L20 14.33L13.07 10.33L14.07 8.6M11 20H4V12H11V20M11.34 9.33L4.41 5.33L5.41 3.6L12.34 7.6L11.34 9.33M11.61 4.87C11.13 4.59 10.97 4 11.24 3.5C11.5 3 12.13 2.86 12.61 3.13C13.09 3.41 13.25 4 12.97 4.5C12.7 5 12.09 5.14 11.61 4.87M13 20V12.6L20 16.64V20H13Z" />
              </svg>
              <span class="menu-title" style="margin-right: 20px;">PAQUETES</span>
            </a>
          </li>
          <!--eventos-->
          <li class="nav-item">
            <a class="nav-link" href="{{ route('evento.index') }}">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="width: 20px; height: 20px; margin-right: 8px;">
                <title>calendar-account-outline</title>
                <path d="M19 3H18V1H16V3H8V1H6V3H5C3.9 3 3 3.9 3 5V19C3 20.11 3.9 21 5 21H19C20.11 21 21 20.11 21 19V5C21 3.9 20.11 3 19 3M19 19H5V9H19V19M19 7H5V5H19M12 10C14 10 15 12.42 13.59 13.84C12.17 15.26 9.75 14.25 9.75 12.25C9.75 11 10.75 10 12 10M16.5 17.88V18H7.5V17.88C7.5 16.63 9.5 15.63 12 15.63S16.5 16.63 16.5 17.88Z" />
              </svg>
              <span class="menu-title" style="margin-right: 20px;">EVENTOS</span>
            </a>
          </li>

          <!--usuarios-->
          <li class="nav-item">
            <a class="nav-link" href="{{ route('usuario.index') }}">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="width: 20px; height: 20px; margin-right: 8px;">
                <title>account-outline</title>
                <path d="M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,6A2,2 0 0,0 10,8A2,2 0 0,0 12,10A2,2 0 0,0 14,8A2,2 0 0,0 12,6M12,13C14.67,13 20,14.33 20,17V20H4V17C4,14.33 9.33,13 12,13M12,14.9C9.03,14.9 5.9,16.36 5.9,17V18.1H18.1V17C18.1,16.36 14.97,14.9 12,14.9Z" />
              </svg>
              <span class="menu-title" style="margin-right: 20px;">USUARIOS</span>
            </a>
          </li>

          <!--TIPOS DE VIVIENDAS-->

          <li class="nav-item">
            <a class="nav-link" href="{{ route('tipo_vivienda.index') }}">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="width: 20px; height: 20px; margin-right: 8px;">
                <title>home-silo-outline</title>
                <path d="M20 21H17V19H20V21M20 17H17V15H20V17M20 13H17V11H20V13M24 7.8C23.6 4.5 20.8 2 17.5 2C15.8 2 14.1 2.7 12.9 3.9C12.2 4.6 11.7 5.3 11.4 6.2L15.6 9H22V22H24V7.8M13.3 7C13.9 5.2 15.6 4 17.5 4S21.1 5.2 21.7 7H13.3M7.5 6L0 11V22H15V11L7.5 6M13 20H10V14H5V20H2V12L7.5 8.5L13 12V20Z" />
              </svg>
              <title>account-outline</title>
              </svg>
              <span class="menu-title" style="margin-right: 20px;">TIPOS DE VIVIENDA </span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('zona_comun.index') }}">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="width: 20px; height: 20px; margin-right: 8px;">
                <title>account-group-outline</title>
                <path d="M12,5A3.5,3.5 0 0,0 8.5,8.5A3.5,3.5 0 0,0 12,12A3.5,3.5 0 0,0 15.5,8.5A3.5,3.5 0 0,0 12,5M12,7A1.5,1.5 0 0,1 13.5,8.5A1.5,1.5 0 0,1 12,10A1.5,1.5 0 0,1 10.5,8.5A1.5,1.5 0 0,1 12,7M5.5,8A2.5,2.5 0 0,0 3,10.5C3,11.44 3.53,12.25 4.29,12.68C4.65,12.88 5.06,13 5.5,13C5.94,13 6.35,12.88 6.71,12.68C7.08,12.47 7.39,12.17 7.62,11.81C6.89,10.86 6.5,9.7 6.5,8.5C6.5,8.41 6.5,8.31 6.5,8.22C6.2,8.08 5.86,8 5.5,8M18.5,8C18.14,8 17.8,8.08 17.5,8.22C17.5,8.31 17.5,8.41 17.5,8.5C17.5,9.7 17.11,10.86 16.38,11.81C16.5,12 16.63,12.15 16.78,12.3C16.94,12.45 17.1,12.58 17.29,12.68C17.65,12.88 18.06,13 18.5,13C18.94,13 19.35,12.88 19.71,12.68C20.47,12.25 21,11.44 21,10.5A2.5,2.5 0 0,0 18.5,8M12,14C9.66,14 5,15.17 5,17.5V19H19V17.5C19,15.17 14.34,14 12,14M4.71,14.55C2.78,14.78 0,15.76 0,17.5V19H3V17.07C3,16.06 3.69,15.22 4.71,14.55M19.29,14.55C20.31,15.22 21,16.06 21,17.07V19H24V17.5C24,15.76 21.22,14.78 19.29,14.55M12,16C13.53,16 15.24,16.5 16.23,17H7.77C8.76,16.5 10.47,16 12,16Z" />
              </svg>
              <title>account-outline</title>
              </svg>
              <span class="menu-title" style="margin-right: 20px;">ZONAS COMUNES</span>
            </a>
          </li>

          <li class="nav-item" >
            <a class="nav-link" href="{{route('reserva.index')}}">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="width: 20px; height: 20px; margin-right: 8px;">
                <title>book-account-outline</title>
                <path d="M18 2A2 2 0 0 1 20 4V20A2 2 0 0 1 18 22H6A2 2 0 0 1 4 20V4A2 2 0 0 1 6 2H18M18 4H13V9L10.5 6.7L8 9V4H6V20H18M13 11A2 2 0 1 1 11 13A2 2 0 0 1 13 11M17 19H9V18C9 16.67 11.67 16 13 16S17 16.67 17 18V19" />
              </svg>
              <title>home-outline</title>
              <path d="M12 5.69L17 10.19V18H15V12H9V18H7V10.19L12 5.69M12 3L2 12H5V20H11V14H13V20H19V12H22" />
              </svg>
              <span class="menu-title" style="margin-right: 20px;">RESERVAS</span>

          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
              <i class="menu-icon mdi mdi-layers-outline"></i>
              <span class="menu-title">Icons</span>
            </a>
          </li>
          <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="icons">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="../pages/icons/mdi.html">Mdi icons</a></li>
            </ul>
          </div>
          </li>

          <div class="collapse" id="auth">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="../pages/samples/login.html"> Login </a></li>
            </ul>
          </div>
          </li>
          <li class="nav-item nav-category">help</li>
          <li class="nav-item">
            <a class="nav-link" href="http://bootstrapdash.com/demo/star-admin2-free/docs/documentation.html">
              <i class="menu-icon mdi mdi-file-document"></i>
              <span class="menu-title">Documentation</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                      <!-- Contenido de las pestañas si es necesario -->
                    </li>
                  </ul>
                </div>
              </div>
              <div class="tab-content tab-content-basic">
                <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                  <div class="row">
                    <div class="col d-flex flex-column">
                      <div class="row flex-grow">
                        <div class="col-12 grid-margin stretch-card">
                          <div class="card card-rounded">
                            <div class="card-body">
                              <div class="d-sm-flex justify-content-between align-items-start">
                                <div>
                                  @yield('tablas')
                                  <h1></h1>
                                  <!-- Aquí puedes agregar tus campos dinámicos desde la base de datos -->
                                </div>
                              </div>
                              <div class="chartjs-bar-wrapper mt-3">
                                <canvas id="marketingOverview"></canvas>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row flex-grow">
                        <!-- Aquí puedes agregar más contenido dinámico si es necesario -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer"></footer>
        <!-- partial -->
      </div>

      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="assets/vendors/chart.js/Chart.min.js"></script>
  <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="assets/js/off-canvas.js"></script>
  <script src="assets/js/hoverable-collapse.js"></script>
  <script src="assets/js/template.js"></script>
  <script src="assets/js/settings.js"></script>
  <script src="assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
  <script src="assets/js/proBanner.js"></script>
  <!-- <script src="../../assets/js/Chart.roundedBarCharts.js"></script> -->
  <!-- End custom js for this page-->
</body>

</html>