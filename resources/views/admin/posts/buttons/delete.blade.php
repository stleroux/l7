{{-- @if($recipe->user_id == Auth::id() || Auth::user()->can('recipe-delete')) --}}

   <a href="{{ route('admin.posts.delete', $post->id) }}"
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-outline-danger"
      title="Delete Post">
      <i class="{{ Config::get('icons.delete') }}"></i>
      {{ $btn_label ?? '' }}
   </a>

@endif
