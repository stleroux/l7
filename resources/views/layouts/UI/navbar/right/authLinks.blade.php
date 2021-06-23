@include('layouts.common.navbar.languages')

<!-- Authentication Links -->
<li class="nav-item">
   <a class="nav-link" href="{{ route('login') }}">
      <i class="{{ config('icons.login') }}"></i>
      {{ __('Login') }}
   </a>
</li>

@if (Route::has('register'))
   <li class="nav-item">
      <a class="nav-link" href="{{ route('register') }}">
         <i class="{{ config('icons.register') }}"></i>
         {{ __('Register') }}
      </a>
   </li>
@endif
