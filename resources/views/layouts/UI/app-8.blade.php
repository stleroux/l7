<!DOCTYPE html>
<html>
   <head>
      @include('layouts.common.head')
   </head>

   <body>

      <wrapper class="d-flex flex-column min-vh-100">

         @include('layouts.UI.navbar.topNavbarDouble')

         <main class="container-fluid flex-fill">

            <div class="row card-trans-6 pt-2 pb-1 mb-2">
               <div class="col-12 col-md-4 offset-md-1">
                  <h3>
                     @yield('pageHeader')
                  </h3>
               </div>
               <div class="col-12 col-md-6 align-middle text-right pt-2">
                  @include('layouts.UI.common.breadcrumb')
               </div>
            </div>

            <div class="row">
               <div class="col-xl-8 offset-xl-2">
                  @yield('content')
               </div>
            </div>
      
         </main>

         @include('layouts.UI.common.footer')

         <!-- Scripts -->
         @include('layouts.common.scripts')

      </wrapper>
      
   </body>
</html>
