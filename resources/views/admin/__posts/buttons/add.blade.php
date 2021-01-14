{{-- @if(checkPerm('post_add')) --}}
   <a href="{{ route('admin.posts.create') }}"
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-success text-light"
      title="Add Post">
      <i class="{{ config('icons.add') }}"></i>
      {{ $btn_label ?? 'Create' }}
   </a>
{{-- @endif --}}
