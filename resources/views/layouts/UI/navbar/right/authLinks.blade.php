@include('layouts.common.navbar.languages')

<!-- Authentication Links -->
<li class="nav-item">
   <a class="nav-link {{ Route::is('login*') ? 'bg-secondary text-light' : '' }} p-2 m-0" href="{{ route('login') }}">
      <i class="{{ config('icons.login') }}"></i>
      {{ __('Login') }}
   </a>
</li>

@if (Route::has('register'))
   <li class="nav-item {{ Route::is('register') ? 'bg-secondary text-light' : '' }}">
      <a class="nav-link p-2 m-0" href="{{ route('register') }}">
         <i class="{{ config('icons.register') }}"></i>
         {{ __('Register') }}
      </a>
   </li>
@endif
