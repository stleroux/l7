<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>TheWoodBarn.ca</title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Font Awesome -->
      {{-- <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}"> --}}
      <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.css') }}">
      <!-- Ionicons -->
      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <!-- iCheck for checkboxes and radio inputs -->
      <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
      <!-- SweetAlert2 -->
      <link rel="stylesheet" href="{{ asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
      <!-- Toastr -->
      <link rel="stylesheet" href="{{ asset('plugins/toastr/toastr.min.css') }}">
      <!-- DataTables -->
      <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
      <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
      <!-- Theme style -->
      {{-- <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}"> --}}
      <link rel="stylesheet" href="{{ asset('dist/css/adminlte.css') }}">
      <!-- Google Font: Source Sans Pro -->
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
      <!-- Custom stylesheets -->
      {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap-colors.css') }}"> --}}
      <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
      @yield('stylesheet')
   </head>

   {{-- <body class="hold-transition sidebar-mini sidebar-collapse layout-navbar-fixed layout-footer-fixed"> --}}
   <body class="hold-transition sidebar-mini sidebar-collapse layout-navbar-fixed layout-footer-fixed">

      <!-- Site wrapper -->
      <div class="wrapper">
         <!-- Navbar -->
         <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            @include('layouts.admin.navbar.left')
            <!-- SEARCH FORM -->
            @include('layouts.admin.navbar.search')
            
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
               <!-- Messages Dropdown Menu -->
               @include('layouts.admin.navbar.messages')
               <!-- Notifications Dropdown Menu -->
               @include('layouts.admin.navbar.notifications')
               <!-- User Dropdown Menu -->               
               @include('layouts.admin.navbar.user')


               <!-- Button to show right sidebar -->
               <li class="nav-item">
                  <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                     <i class="fas fa-th-large"></i>
                  </a>
               </li>
            </ul>
         </nav>
         <!-- /.navbar -->

         <!-- Main Sidebar Container -->
         <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            @include('layouts.admin.sidebars.left.brandLogo')
            <!-- Sidebar -->
            <div class="sidebar">
               <!-- Sidebar user (optional) -->
               @include('layouts.admin.sidebars.left.user')
               <!-- Sidebar Menu -->
               <nav class="mt-2">
                 <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                     @include('layouts.admin.sidebars.left.menu')
                  </ul>
               </nav>
               <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
         </aside>

         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
         {{-- style="background-image: url('{{ asset('/images/background.jpg')}}'); background-repeat: no-repeat; background-size: cover;"> --}}
            <!-- Content Header (Page header) -->
            <section class="content-header py-2">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-sm-6">
                        <h1>@yield('pageHeader')</h1>
                     </div>
                     <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                           @yield('breadcrumbs')
                        </ol>
                     </div>
                  </div>
               </div>
               <!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
               <div class="container-fluid">
                  @yield('formStart')
                  @yield('formActions')
                  @yield('massDestroy')
                  @yield('content')
                  @yield('formEnd')
               </div>
            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->

         @include('layouts.admin.footer')

         {{-- Control Sidebar --}}
         <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="mx-2">
            @include('layouts.admin.sidebars.right.test')
            @yield('rightSidebar')
            </div>
         </aside>
         <!-- /.control-sidebar -->

      </div>
      <!-- ./wrapper -->

      <!-- jQuery -->
      <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
      <!-- Bootstrap 4 -->
      <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
      <!-- SweetAlert2 -->
      <script src="{{ asset('plugins/sweetalert2/sweetalert2.min.js') }}"></script>
      <!-- Toastr -->
      <script src="{{ asset('plugins/toastr/toastr.min.js') }}"></script>
      <!-- AdminLTE App -->
      <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
      <!-- DataTables -->
      <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
      <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
      <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
      <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
      <!-- AdminLTE for demo purposes -->
      {{-- <script src="{{ asset('dist/js/demo.js') }}"></script> --}}

      {{--
         Add sidebar item highlight automatically
         Does not work in multi-level menus
      --}}
{{--       <script>
         var url = window.location;
         const allLinks = document.querySelectorAll('.nav-item a');
         const currentLink = [...allLinks].filter(e => {
             return e.href == url;
         });

         currentLink[0].classList.add("active");
         currentLink[0].closest(".nav-treeview").style.display = "block ";
         currentLink[0].closest(".has-treeview").classList.add("menu-open");
         $('.menu-open').find('a').each(function() {
             if (!$(this).parents().hasClass('active')) {
                 $(this).parents().addClass("active");
                 $(this).addClass("active");
             }
         });
      </script> --}}

      <script>
         @if(Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}";
            
            switch(type){
               case 'info':
                  toastr.info("{{ Session::get('message') }}");
                  break;

               case 'warning':
                  toastr.warning("{{ Session::get('message') }}");
                  break;

               case 'success':
                  toastr.success("{{ Session::get('message') }}");
                  break;

               case 'error':
                  toastr.error("{{ Session::get('message') }}");
                  break;
            }
         @endif
      </script>

    {{--   <script>
         $(function(){
          $('#navRight').hover(function(){
              $(this).animate({width:'200px'},500);
          },function(){
              $(this).animate({width:'5px'},500);
          }).trigger('mouseleave');
         });
      </script> --}}

      @yield('scripts')
   </body>
</html>
