{{-- @if(checkPerm('post_read', $post)) --}}
   <a href="{{ route('admin.posts.show', $post->id) }}"
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-primary text-light"
      title="Show Post">
      <i class="{{ Config::get('icons.show') }}"></i>
      {{ $btn_label ?? 'Show' }}
   </a>
{{-- @endif --}}
