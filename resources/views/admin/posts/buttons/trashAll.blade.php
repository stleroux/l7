{{-- @if($recipe->user_id == Auth::id() || Auth::user()->can('recipe-delete')) --}}

   <button
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-danger"
      type="submit"
      formaction="{{ route('admin.posts.trashAll') }}"
      formmethod="POST"
      id="bulk-trash"
      title="Trash Selected"
      style="display:none;"
      onclick="return confirm('Are you sure you want to trash these posts?')">
      <i class="{{ Config::get('icons.trash') }}"></i>
      {{ $btn_label ?? '' }}
   </button>

{{-- @endif --}}
