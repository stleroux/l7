{{-- @if(checkPerm('recipe_read')) --}}
   @if(Request::is('recipes/all'))
      <a href="{{ route('recipes.printAll', 'all') }}" class="btn {{ $size ? 'btn-'.$size : '' }} btn-default" title="Print All Recipes">
         <i class="{{ Config::get('icons.print') }}"></i>
         {{ $btn_label ?? '' }}
      </a>
   @else
      <a href="{{ route('recipes.printAll', Request::segment(2)) }}" class="btn {{ $size ? 'btn-'.$size : '' }} btn-default" title="Print All Recipes In Category">
         <i class="{{ Config::get('icons.print') }}"></i>
         {{ $btn_label ?? '' }}
      </a>
   @endif
{{-- @endif --}}
