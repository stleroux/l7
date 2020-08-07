<ul class="navbar-nav mr-auto">

   <li class="nav-item {{ Route::is('recipes*') ? 'bg-black' : '' }}">
      <a class="nav-link" href="{{ route('recipes.indexGrid', 'all') }}">
      	<i class="{{ Config::get('icons.recipes') }}"></i>
      	{{ __('Recipes') }}
      </a>
   </li>

   <li class="nav-item {{ Route::is('projects*') ? 'bg-black' : '' }}">
      <a class="nav-link" href="{{ route('projects.index') }}">
      	<i class="{{ Config::get('icons.projects') }}"></i>
      	{{ __('Projects') }}
      </a>
   </li>

   <li class="nav-item {{ Route::is('about*') ? 'bg-black' : '' }}">
      <a class="nav-link" href="{{ route('about') }}">
         <i class="{{ Config::get('icons.about-us') }}"></i>
         About us
      </a>
   </li>
   
   <li class="nav-item {{ Route::is('contact*') ? 'bg-black' : '' }}">
      <a class="nav-link" href="{{ route('contact') }}">
         <i class="{{ Config::get('icons.contact-us') }}"></i>
         Contact us
      </a>
   </li>

</ul>
