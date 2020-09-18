{{-- @if(checkPerm('post_delete', $post)) --}}
   <a href="{{ route('admin.posts.trash', $post->id) }}"
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-danger text-light"
      title="Trash Post">
      <i class="{{ Config::get('icons.trash') }}"></i>
      {{ $btn_label ?? 'Trash' }}
   </a>
{{-- @endif --}}
