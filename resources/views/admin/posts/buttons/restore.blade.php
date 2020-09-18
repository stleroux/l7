{{-- @if($recipe->user_id == Auth::id() || Auth::user()->can('recipe-edit')) --}}

   <a href="{{ route('admin.posts.restore', $post->id) }}"
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-outline-primary"
      title="Restore Post">
      <i class="{{ Config::get('icons.restore') }}"></i>
      {{ $btn_label ?? '' }}
   </a>

{{-- @endif --}}
