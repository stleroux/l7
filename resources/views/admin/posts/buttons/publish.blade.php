{{-- @if($post->user_id == Auth::id() || Auth::user()->can('recipe-publish')) --}}

   @if($post->published_at)
      <a href="{{ route('admin.posts.unpublish', $post->id) }}"
         class="btn {{ $size ? 'btn-'.$size : '' }} btn-outline-secondary"
         title="Unpublish Post">
         <i class="{{ Config::get('icons.publish') }}"></i>
         {{ $btn_label ?? '' }}
      </a>
   @else
      <a href="{{ route('admin.posts.publish', $post->id) }}"
         class="btn {{ $size ? 'btn-'.$size : '' }} btn-outline-secondary"
         title="Publish Post">
         <i class="{{ Config::get('icons.publish') }}"></i>
         {{ $btn_label ?? '' }}
      </a>
   @endif

{{-- @endif --}}
