@if($next)
   <a href="{{ route('admin.posts.show', $next) }}"
      class="btn {{ $size ? 'btn-'.$size : '' }}btn-primary text-light col-sm-5"
      title="Next Post">
      {{ $btn_label ?? '' }}
      <i class="{{ Config::get('icons.next') }}"></i>
   </a>
@endif
