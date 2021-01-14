@if($recipe->user_id == Auth::id() || Auth::user()->can('recipe-delete'))

   <a href="{{ route('admin.recipes.delete', $recipe->id) }}"
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-outline-danger"
      title="Delete Recipe">
      <i class="{{ config('icons.delete') }}"></i>
      {{ $btn_label ?? '' }}
   </a>

@endif
