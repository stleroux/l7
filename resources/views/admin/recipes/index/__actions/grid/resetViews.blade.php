{{-- Reset Views --}}

@if(Auth::user()->can('recipe-edit'))
	<button type="button"
	    class="resetViews-model btn btn-sm btn-default"
	    data-toggle="modal"
	    data-target="#resetViewsModal"
	    data-id="{{ $recipe->id }}"
	    data-url="{{ url('admin/recipes/resetViews', $recipe) }}"
	    title="Reset Views Count"
	    >
	    <i class="{{ config('icons.resetViews') }} text-secondary"></i>
	</button>
@endif
