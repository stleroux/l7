<a href="{{ route('admin.posts.show', $post->id) }}"
   class="btn {{ $size ? 'btn-'.$size : '' }} btn-outline-secondary"
   title="Show Post">
   <i class="{{ config('icons.show') }}"></i>
   {{ $btn_label ?? '' }}
</a>
