{{-- @if($recipe->user_id == Auth::id() || Auth::user()->can('recipe-edit')) --}}

   <a href="{{ route('admin.posts.edit', $post->id) }}"
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-outline-primary"
      title="Edit Post">
      <i class="{{ Config::get('icons.edit') }}"></i>
      {{ $btn_label ?? '' }}
   </a>

{{-- @endif --}}
