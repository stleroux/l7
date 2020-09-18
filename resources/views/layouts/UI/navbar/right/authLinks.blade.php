<!-- Authentication Links -->
<li class="nav-item">
   <a class="nav-link" href="{{ route('login') }}">
   	<i class="{{ Config::get('icons.login') }}"></i>
   	{{ __('Login') }}
   </a>
</li>

@if (Route::has('register'))
   <li class="nav-item">
      <a class="nav-link" href="{{ route('register') }}">
      	<i class="{{ Config::get('icons.register') }}"></i>
   		{{ __('Register') }}
   	</a>
   </li>
@endif