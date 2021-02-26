{{-- Edit --}}

@if($recipe->user_id == Auth::id() || Auth::user()->can('recipe-edit'))
	<a href="{{ route('admin.recipes.edit', $recipe) }}" class="btn btn-sm btn-default" title="Edit Recipe">
   	<i class="{{ config('icons.edit') }} text-primary"></i>
	</a>
@endif
