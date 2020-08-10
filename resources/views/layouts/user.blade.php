<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Sakura | Delivery</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition layout-top-nav">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
      <div class="container">
        <a href="/catalog" class="navbar-brand">
          <img src="../../dist/img/sakura-logo.png" alt="Sakura Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
          <span class="brand-text font-weight-light">Sakura</span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
          <!-- Left navbar links -->
          <ul class="navbar-nav">

            <li class="nav-item dropdown">
              <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Menu</a>
              <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                @foreach($categories as $category)
                <li class="dropdown-item">
                  <a class="text-dark" href="/catalog/{{$category->id}}">{{$category->name}}</a>
                </li>
                @endforeach
              </ul>
            </li>

            <li class="nav-item">
              <a href="/cart" class="nav-link">My Cart</a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">Order Tracker</a>
            </li>

            <li class="nav-item">
              <a href="main#contact" class="nav-link">Hotlines</a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">Store Locations</a>
            </li>
          </ul>

          <!-- SEARCH FORM -->
          <form class="form-inline ml-5 ml-md-5" action="/search" method="POST">
            @csrf
            <div class="input-group input-group-sm">
              <input name="search" class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </form>
        </div>

        <!-- Right navbar links -->
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">

          <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
              class="fas fa-th-large"></i></a>
            </li>
          </ul>
        </div>
      </nav>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-light border border-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3 mx-auto">

          <a href="/profile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle text-dark">User</a>

          {{-- {{ Auth::user()->name }} --}}
          
          <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu bg-light ml-5">
            <a href="/profile" class="nav-link">Profile</a>
            @auth
            @if(Auth::user()->role_id==1)
            <a href="/addfood" class="nav-link">Add Food</a>
            @endif
            @endauth  
            <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </ul>
      </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- /.navbar -->

    <!-- Content Wrapper. Contains page content -->
    @yield('content')
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        Version 7.20.2016
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2020.<a href="https://www.facebook.com/zuittphilippines/">Sakura</a>.</strong> All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>