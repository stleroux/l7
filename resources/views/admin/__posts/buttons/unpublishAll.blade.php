{{-- @if(checkPerm('post_edit')) --}}
   <button
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-primary text-light"
      type="submit"
      formaction="{{ route('admin.posts.unpublishAll') }}"
      formmethod="POST"
      id="bulk-publish"
      style="display:none;"
      title="Unpublish Selected"
      onclick="return confirm('Are you sure you want to unpublish these posts?')">
      <i class="{{ config('icons.unpublish') }} text-danger"></i>
      {{ $btn_label ?? 'Unpublish Selected' }}
   </button>
{{-- @endif --}}
