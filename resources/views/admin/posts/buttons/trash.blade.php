{{-- @if($recipe->user_id == Auth::id() || Auth::user()->can('recipe-delete')) --}}

   <a href="{{ route('admin.posts.trash', $post->id) }}"
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-outline-pink"
      title="Trash Post">
      <i class="{{ Config::get('icons.trash') }}"></i>
      {{ $btn_label ?? '' }}
   </a>

{{-- @endif --}}
