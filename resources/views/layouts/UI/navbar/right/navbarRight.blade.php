<ul class="navbar-nav ml-auto">

   @guest

      @include('layouts.UI.navbar.right.authLinks')

   @else

      @can('admin-dashboard')
         <li class="nav-item {{ Route::is('admin.dashboard*') ? 'active' : '' }}">
            <a class="nav-link p-2" href="{{ route('admin.dashboard') }}">
               <i class="{{ config('icons.dashboard') }}"></i>
               Dashboard
            </a>
         </li>
      @endcan

      @include('layouts.common.navbar.mylinks')
      @include('layouts.common.navbar.languages')
      @include('layouts.common.navbar.user')

   @endguest

</ul>
