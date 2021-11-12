<!DOCTYPE html>
<html>
   <head>
      @include('layouts.common.head')
   </head>

   <body>
      
      <wrapper class="d-flex flex-column min-vh-100">
         
         @include('layouts.UI.navbar.topNavbarDouble')

         <main class="container-fluid py-3 flex-fill">

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
      
         </main>
         
         @include('layouts.UI.common.footer')

         <!-- Scripts -->
         @include('layouts.common.scripts')

      </wrapper>

   </body>
</html>
