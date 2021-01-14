@if($recipe->user_id == Auth::id() || Auth::user()->can('recipe-edit'))

   <a href="{{ route('admin.recipes.restore', $recipe->id) }}"
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-outline-primary"
      title="Restore Recipe">
      <i class="{{ config('icons.restore') }}"></i>
      {{ $btn_label ?? '' }}
   </a>

@endif
