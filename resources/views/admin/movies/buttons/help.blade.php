@auth
   <a href="/help#{{$bookmark}}"
      target="_blank"
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-primary text-light"
      title="Help">
      <i class="{{ config('buttons.help') }}"></i>
      Help
   </a>
@endauth
