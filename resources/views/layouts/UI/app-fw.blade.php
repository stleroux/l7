<!DOCTYPE html>
<html>
   <head>
      @include('layouts.common.head')
      @yield('stylesheet')
   </head>

   <body>
      @include('layouts.UI.navbar.topNavbar')

      <div class="container-fluid">

         @if(View::hasSection('pageHeader'))
            <div class="row mt-5 pt-4 card-trans-6 mb-2">
            
               <div class="col-xl-6 offset-xl-1">
                  <h1 class="d-flex text-center">
                     @yield('pageHeader')
                  </h1>
               </div>
               
               <div class="d-none d-sm-block col-4 text-right">
                  @if(Route::currentRouteName() != '/')
                     @include('layouts.UI.common.breadcrumb')
                  @endif
               </div>
            </div>
         @endif

<div class="row {{ (!View::hasSection('pageHeader')) ? ' mt-5 pt-4' : '' }}">
   <div class="col">
      

         {{-- @if(!View::hasSection('pageHeader'))
            <div class="row mt-5 pt-4">
         @else
            <div class="row">
         @endif --}}
               @yield('content')
            </div>
   </div>

         @include('layouts.UI.common.footer')

      </div>

      <!-- Scripts -->
      @include('layouts.common.scripts')
      
   </body>

</html>
