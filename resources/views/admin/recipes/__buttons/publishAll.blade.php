@if($recipe->user_id == Auth::id() || Auth::user()->can('recipe-publish'))

   <button
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-primary border border-light text-warning"
      type="submit"
      formaction="{{ route('admin.recipes.publishAll') }}"
      formmethod="POST"
      id="bulk-publish"
      title="Publish Selected"
      style="display:none;"
      onclick="return confirm('Are you sure you want to publish these recipes?')">
      <i class="{{ config('icons.publish') }} text-success"></i>
      {{ $btn_label ?? '' }}
   </button>

@endif
