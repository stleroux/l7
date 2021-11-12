<!DOCTYPE html>
<html>
   <head>
      @include('layouts.common.head')
   </head>

   <body>
      
      <wrapper class="d-flex flex-column min-vh-100">
      
         <main class="container-fluid py-3 flex-fill">         

            <div class="row card-trans-6 pt-2 pb-1 mb-2">
               <div class="col-12">
                  <h3>
                     @yield('pageHeader')
                  </h3>
               </div>
            </div>

            <div class="row">
               <div class="col-xl-10 offset-xl-1">
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
