{{-- @if(!env('APP_ENV') == 'local') --}}
   {{-- <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark"> --}}
   {{-- <nav class="main-header navbar navbar-expand navbar-dark bg-light"> --}}
{{-- @else --}}
   {{-- <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light"> --}}
   <nav class="main-header navbar navbar-expand navbar-white navbar-light">
{{-- @endif --}}
   
  <!-- Navbar -->
            <!-- Left navbar links -->
            @include('layouts.admin.navbar.left')
            <!-- SEARCH FORM -->
            @include('admin.search.quickSearch')
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
               <!-- Messages Dropdown Menu -->
               @include('layouts.admin.navbar.messages')
               <!-- Notifications Dropdown Menu -->
               @include('layouts.admin.navbar.notifications')
               <!-- My Links Dropdown Menu -->
               @include('layouts.common.navbar.myLinks')
               <!-- User Dropdown Menu -->               
               @include('layouts.common.navbar.user')
               <!-- Button to show right sidebar -->
               <li class="nav-item">
                  <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                     <i class="fas fa-th-large"></i>
                  </a>
               </li>
            </ul>
         </nav>
         <!-- /.navbar -->
</nav>