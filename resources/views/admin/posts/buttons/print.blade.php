{{-- @if(checkPerm('recipe_read')) --}}
   <a href="{{ route('posts.print', $post->id) }}"
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-primary"
      title="Print Post">
      <i class="{{ config('icons.print') }}"></i>
      <div class="d-none d-lg-inline">
      	{{ $btn_label ?? '' }}
      </div>
   </a>
{{-- @endif --}}