{{-- @if(checkPerm('recipe_read')) --}}
   <a href=""
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-primary d-print-none"
      onClick="window.print()">
      <i class="{{ Config::get('icons.print') }}"></i>
      {{ $btn_label ?? '' }}
   </a>
{{-- @endif --}}
