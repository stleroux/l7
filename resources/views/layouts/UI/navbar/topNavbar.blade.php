@if(!env('APP_ENV') == 'local')
   <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
@else
   <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
@endif
   
   <a class="navbar-brand" href="/">TheWoodBarn.ca</a>
   
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
   </button>

   <div class="collapse navbar-collapse" id="navbarCollapse">
      @include('layouts.UI.navbar.left.navbarLeft')
      @include('layouts.UI.navbar.search')
      @include('layouts.UI.navbar.center.navbarCenter')
      @include('layouts.UI.navbar.right.navbarRight')
   </div>
</nav>