{{-- @if($recipe->user_id == Auth::id() || Auth::user()->can('recipe-restore')) --}}

   <button
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-primary text-light"
      type="submit"
      formaction="{{ route('admin.posts.restoreAll') }}"
      formmethod="POST"
      id="bulk-restore"
      title="Restore Selected"
      style="display:none;"
      onclick="return confirm('Are you sure you want to restore all these posts?')">
      <i class="{{ config('icons.restore') }}"></i>
      {{ $btn_label ?? '' }}
   </button>

{{-- @endif --}}
