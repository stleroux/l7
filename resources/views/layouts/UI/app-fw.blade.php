<!DOCTYPE html>
<html>
   <head>
      @include('layouts.common.head')
   </head>

   <body>

      <wrapper class="d-flex flex-column min-vh-100">

         @include('layouts.UI.navbar.topNavbarDouble')

         <main class="container-fluid flex-fill">

            @if(View::hasSection('pageHeader'))
               <div class="row pt-3 card-trans-6 mb-2">
                  <div class="col">
                     <h1 class="d-flex text-center">
                        @yield('pageHeader')
                     </h1>
                  </div>
               </div>

               <div class="row">
                  <div class="{{-- d-none d-sm-block --}} col-12 float-right">               
                     @if(Route::currentRouteName() != '/')
                        @include('layouts.UI.common.breadcrumb')
                     @endif
                  </div>
               </div>
            @endif

            <div class="row {{ (!View::hasSection('pageHeader')) ? ' mt-5 pt-4' : '' }}">
               <div class="col">
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
