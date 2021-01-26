{{-- @if(checkPerm('recipe_browse')) --}}
   <a href="/help#{{$bookmark}}"
      target="_blank"
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-primary"
      title="Help">
      <i class="{{ config('icons.help') }}"></i>
      {{ $btn_label ?? 'Help' }}
   </a>
{{-- @endif --}}
