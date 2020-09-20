@if($recipe->user_id == Auth::id() || Auth::user()->can('recipe-manage'))

   <button
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-primary border border-light text-warning"
      type="submit"
      formaction="{{ route('admin.recipes.resetViewsAll') }}"
      formmethod="POST"
      id="bulk-resetViews"
      title="Reset View Counts for Selected"
      style="display:none;"
      onclick="return confirm('Are you sure you want to reset the view counts for these recipes?')">
      <i class="{{ Config::get('icons.') }} text-success"></i>
      {{ $btn_label ?? '' }}
   </button>

@endif