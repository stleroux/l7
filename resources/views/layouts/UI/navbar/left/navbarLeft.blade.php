<ul class="navbar-nav mr-auto">

   <li class="nav-item {{ Route::is('recipes*') ? 'bg-black border-red-2' : '' }}">
      <a class="nav-link" href="{{ route('recipes.indexGrid', 'all') }}">
      	<i class="{{ Config::get('icons.recipes') }}"></i>
      	{{ __('Recipes') }}
      </a>
   </li>

   <li class="nav-item {{ Route::is('projects*') ? 'bg-black border-red-2' : '' }}">
      <a class="nav-link" href="{{ route('projects.index') }}">
      	<i class="{{ Config::get('icons.projects') }}"></i>
      	{{ __('Projects') }}
      </a>
   </li>

   <li class="nav-item {{ Route::is('blog*') ? 'bg-black border-red-2' : '' }}">
      <a class="nav-link" href="{{ route('blog.index') }}">
         <i class="{{ Config::get('icons.blog') }}"></i>
         {{ __('Blog') }}
      </a>
   </li>

   @can('dart-access')
      <li class="nav-item {{ Route::is('darts*') ? 'bg-black border-red-2' : '' }}">
         <a class="nav-link" href="{{ route('darts.index') }}">
            <i class="{{ Config::get('icons.darts') }}"></i>
            {{ __('Darts') }}
         </a>
      </li>
   @endcan

   <li class="nav-item {{ Route::is('about*') ? 'bg-black border-red-2' : '' }}">
      <a class="nav-link" href="{{ route('about') }}">
         <i class="{{ Config::get('icons.about-us') }}"></i>
         About us
      </a>
   </li>
   
   <li class="nav-item {{ Route::is('contact*') ? 'bg-black border-red-2' : '' }}">
      <a class="nav-link" href="{{ route('contact') }}">
         <i class="{{ Config::get('icons.contact-us') }}"></i>
         Contact us
      </a>
   </li>

{{--    <li class="nav-item {{ Route::is('members*') ? 'bg-black border-red-2' : '' }}">
      <a class="nav-link" href="{{ route('members') }}">
         <i class="{{ Config::get('icons.users') }}"></i>
         Members
      </a>
   </li> --}}

</ul>
