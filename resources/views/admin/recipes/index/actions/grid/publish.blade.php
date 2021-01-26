{{-- Publish --}}

@if(!$recipe->published_at)
	<button type="button"
	   class="publish-model btn btn-sm btn-default"
	   data-toggle="modal"
	   data-target="#publishModal"
	   data-id="{{ $recipe->id }}"
	   data-url="{{ url('admin/recipes/publish', $recipe) }}"
	   title="Publish Recipe"
	   >
	   <i class="{{ config('icons.publish') }} text-warning"></i>
	</button>
@endif
