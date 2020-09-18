@if($recipe->user_id == Auth::id() || Auth::user()->can('recipe-delete'))

   <a href="{{ route('admin.recipes.trash', $recipe->id) }}"
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-outline-pink"
      title="Trash Recipe">
      <i class="{{ Config::get('icons.trash') }}"></i>
      {{ $btn_label ?? '' }}
   </a>

@endif
