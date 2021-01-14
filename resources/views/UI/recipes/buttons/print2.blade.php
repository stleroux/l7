{{-- @if(checkPerm('recipe_read')) --}}
   <a href=""
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-maroon d-print-none"
      onClick="window.print()">
      <i class="{{ config('icons.print') }}"></i>
      {{ $btn_label ?? '' }}
   </a>
{{-- @endif --}}
