{{-- Unpublish --}}

@if($recipe->published_at)
	<button type="button"
	   class="unpublish-model btn btn-sm btn-default"
	   data-toggle="modal"
	   data-target="#unpublishModal"
	   data-id="{{ $recipe->id }}"
	   data-url="{{ url('admin/recipes/unpublish', $recipe) }}"
	   title="Unpublish Recipe"
	   >
	   <i class="{{ config('icons.publish') }} text-warning"></i>
	</button>
@endif
