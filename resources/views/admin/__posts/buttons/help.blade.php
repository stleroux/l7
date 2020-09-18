@auth
   <a href="/help#{{$bookmark}}"
      target="_blank"
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-primary text-light"
      title="Help">
      <i class="{{ Config::get('icons.help') }}"></i>
      {{ $btn_label ?? 'Help' }}
   </a>
@endauth
