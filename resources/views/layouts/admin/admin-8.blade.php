<!DOCTYPE html>
<html>
   <head>
      @include('layouts.common.head')
      {{-- <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> --}}
      {{-- @yield('stylesheet') --}}
   </head>

   <body class="hold-transition sidebar-mini layout-navbar-fixed layout-footer-fixed {{ config('settings.sidebarCollapsed') == 'on' ? 'sidebar-collapse' : '' }}">

      <!-- Site wrapper -->
      <div class="wrapper">

         <!-- Navbar -->
         @include('layouts.admin.navbar.topNavbar')
         <!-- /.navbar -->

         <!-- Main Sidebar Container -->
         <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            @include('layouts.admin.sidebars.left.brandLogo')
            <!-- Sidebar -->
            <div class="sidebar">
               <!-- Sidebar user (optional) -->
               {{-- @include('layouts.admin.sidebars.left.user') --}}
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
            <section class="content-header py-2">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-sm-6">
                        <h1>@yield('pageHeader')</h1>
                     </div>
                     <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                           @yield('breadcrumb')
                        </ol>
                     </div>
                  </div>
               </div>
               <!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
               <div class="container-fluid">
                  {{-- @yield('content') --}}

<div class="row">
<div class="col-xl-8 offset-xl-2">
@yield('topbar')
</div>
</div>

<div class="row">
<div class="col-xl-8 offset-xl-2">
@yield('content')
</div>

{{-- <div class="col-xl-2">
@yield('right_column')
</div> --}}
</div>

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
               @include('layouts.admin.sidebars.right.popout')
               @yield('rightSidebar')
            </div>
         </aside>
         <!-- /.control-sidebar -->

      </div>
      <!-- ./wrapper -->

      <!-- Scripts -->
      @include('layouts.common.scripts')
      
   </body>
</html>
