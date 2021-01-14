@if($recipe->user_id == Auth::id() || Auth::user()->can('recipe-publish'))

   <button
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-outline-primary text-danger"
      type="submit"
      formaction="{{ route('admin.recipes.unpublishAll') }}"
      formmethod="POST"
      id="bulk-unpublish"
      title="Unpublish Selected"
      style="display:none;"
      onclick="return confirm('Are you sure you want to unpublish these recipes?')">
      <i class="{{ config('icons.publish') }}"></i>
      {{ $btn_label ?? '' }}
   </button>

@endif
