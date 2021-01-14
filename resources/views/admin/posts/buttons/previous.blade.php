@if($previous)
   <a href="{{ route('admin.post.show', $previous) }}"
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-primary text-light col-sm-5"
      title="Previous Post">
      <i class="{{ config('icons.previous') }}"></i>
      {{ $btn_label ?? '' }}
   </a>
@endif
