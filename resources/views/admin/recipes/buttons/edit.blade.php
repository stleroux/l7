@if($recipe->user_id == Auth::id() || Auth::user()->can('recipe-edit'))

   <a href="{{ route('admin.recipes.edit', $recipe->id) }}"
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-outline-primary"
      title="Edit Recipe">
      <i class="{{ config('icons.edit') }}"></i>
      {{ $btn_label ?? '' }}
   </a>

@endif
