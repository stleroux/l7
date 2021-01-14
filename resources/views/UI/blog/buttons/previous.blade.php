@if($previous)
   <a href="{{ route('blog.show', $previous) }}"
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-primary text-light col-2"
      title="Previous Blog">
      <i class="{{ config('icons.previous') }}"></i>
      {{-- Previous --}}
      {{ $btn_label ?? 'Previous' }}
   </a>
@endif
