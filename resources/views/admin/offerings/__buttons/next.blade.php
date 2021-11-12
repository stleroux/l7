@if($next)
   <a href="{{ route('admin.projects.show', $next) }}"
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-primary text-light col-sm-5"
      title="Next Project">
      {{ $btn_label ?? '' }}
      <i class="{{ config('icons.next') }}"></i>
   </a>
@endif
