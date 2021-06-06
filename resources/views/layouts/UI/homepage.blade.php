<!DOCTYPE html>
<html>
   <head>
      @include('layouts.common.head')
      {{-- @yield('stylesheet') --}}
   </head>

   <body>
      @include('layouts.UI.navbar.topNavbar')

      <div class="container-fluid">

         <div class="row mt-5 pt-3 mt-lg-5 pt-lg-5 mt-xl-4 pt-xl-5 mb-2 card-trans-4">
            <div class="col-10 offset-1">
               <h1 class="d-flex text-center">
                  @yield('pageHeader')
               </h1>
            </div>
         </div>

         <div class="row">
            <div class="col-xl-10 offset-xl-1 text-right">
               @yield('topbar')
            </div>
         </div>

         <div class="row">
            <div class="col-xl-8 offset-xl-1">
               @yield('content')
            </div>

            <div class="col-xl-2">
               @yield('rightColumn')
            </div>
         </div>
      
         @include('layouts.UI.common.footer')
      
      </div>

               <!-- /.container-fluid -->

      <!-- Scripts -->
      @include('layouts.common.scripts')
       
   </body>
</html>
