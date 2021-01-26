{{-- DESSTROY --}}

@if($recipe->user_id == Auth::id() || Auth::user()->can('recipe-delete'))
	<button type="button"
	    class="destroy-model btn btn-sm btn-default"
	    data-toggle="modal"
	    data-target="#destroyModal"
	    data-id="{{ $recipe->id }}"
	    data-url="{{ url('admin/recipes', $recipe) }}"
	    title="Trash Recipe"
	    >
	    <i class="{{ config('icons.trash') }} text-pink"></i>
	</button>
@endif
