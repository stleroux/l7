{{-- @if($recipe->user_id == Auth::id() || Auth::user()->can('recipe-delete')) --}}

   <button
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-primary border border-light text-warning"
      type="submit"
      formaction="{{ route('admin.posts.deleteAll') }}"
      formmethod="POST"
      id="bulk-delete"
      title="Delete Selected"
      style="display:none"
      onclick="return confirm('Are you sure you want to permanently delete these posts?')">
      <i class="{{ Config::get('icons.delete') }}"></i>
      {{ $btn_label ?? '' }}
   </button>

{{-- @endif --}}
