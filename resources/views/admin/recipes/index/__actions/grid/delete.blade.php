{{-- Delete Permanently --}}

@if(Auth::user()->can('recipe-delete'))
	<button type="button"
	    class="delete-model btn btn-sm btn-default"
	    data-toggle="modal"
	    data-target="#deleteModal"
	    data-id="{{ $recipe->id }}"
	    data-url="{{ url('admin/recipes/delete', $recipe) }}"
	    title="Permanently Delete Recipe"
	    >
	    <i class="{{ config('icons.delete') }} text-danger"></i>
	</button>
@endif
