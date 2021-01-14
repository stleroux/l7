{{-- @if(checkPerm('recipe_read')) --}}
   @if(Request::is('recipes/all'))
      <a href="{{ route('recipes.printAll', 'all') }}"
         class="btn {{ $size ? 'btn-'.$size : '' }} btn-maroon"
         title="Print All Recipes">
         <i class="{{ config('icons.print') }}"></i>
         {{ $btn_label ?? '' }}
      </a>
   @else
      <a href="{{ route('recipes.printAll', Request::segment(3)) }}"
         class="btn {{ $size ? 'btn-'.$size : '' }} btn-maroon"
         title="Print All Recipes In Category">
         <i class="{{ config('icons.print') }}"></i>
         {{ $btn_label ?? '' }}
      </a>
   @endif
{{-- @endif --}}
