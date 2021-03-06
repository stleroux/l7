<!DOCTYPE html>
<html>
   <head>
      @include('layouts.common.head')
      {{-- @yield('stylesheet') --}}
   </head>

   <body>
      @include('layouts.UI.navbar.topNavbar')

      <div class="container-fluid">

         <div class="row mt-5 pt-4 card-trans-6 mb-2">
            <div class="col-6 offset-xl-1">
               <h1 class="d-flex text-center justify-content-sm-start">
                  @yield('pageHeader')
               </h1>
            </div>
            <div class="d-none d-sm-block col-4">
               @include('layouts.UI.common.breadcrumb')
            </div>
            <div class="col-1"></div>
         </div>

         <div class="row">
            <div class="col-xl-10 offset-xl-1">
               @yield('content')
            </div>
         </div>
      
         @include('layouts.UI.common.footer')
      
      </div><!-- /.container-fluid -->

      <!-- Scripts -->
      @include('layouts.common.scripts')

   </body>
</html>
