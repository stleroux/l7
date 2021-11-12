@if(!env('APP_ENV') === 'local')
   <nav class="navbar-expand-lg navbar-dark bg-dark">
@else
   <nav class="navbar-expand-lg navbar-light bg-light">
@endif
   
   <div class="row">
   {{-- <div class="row-col collapse navbar-collapse" id="navbarCollapse"> --}}
      <div class="col ml-4">
         <a class="navbar-brand" href="/">
            <div class="font-weight-bold">
               @if(!env('APP_ENV') === 'local')
                  <div class="text-danger driftwood-font">
                     TheWoodBarn.ca
                  </div>
               @else
                  <div class="text-dark driftwood-font">
                     TheWoodBarn.ca
                  </div>
               @endif
            </div>
         </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
      </div>
      <div class="col float-right pt-2">
         @include('layouts.UI.navbar.search')
      </div>
   </div>

   <div class="row-col collapse navbar-collapse bg-dark" id="navbarCollapse">
      {{-- <div class="col-12 border"> --}}
         @include('layouts.UI.navbar.left.navbarLeft')
      {{-- </div> --}}
   </div>

   {{-- <div class="collapse navbar-collapse" id="navbarCollapse">
      @include('layouts.UI.navbar.left.navbarLeft')
      @include('layouts.UI.navbar.search')
      @include('layouts.UI.navbar.center.navbarCenter')
      @include('layouts.UI.navbar.right.navbarRight')
   </div> --}}
   <div class="row-col justify-content-center collapse navbar-collapse" id="navbarCollapse">
      {{-- <div class="col">
         @include('layouts.UI.navbar.center.navbarCenter')
      </div> --}}
      {{-- <div class="col-sm-6"> --}}
         @include('layouts.UI.navbar.right.navbarRight')         
      {{-- </div> --}}
   </div>
</nav>