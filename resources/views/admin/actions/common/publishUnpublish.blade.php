

<form style="display:inline;" method="POST">
   @if($recipe->user_id == Auth::id() || Auth::user()->can('recipe-publish'))
      @if($recipe->published_at)
         <button type="button"
            class="unpublish-model btn btn-block btn-default mt-2"
            data-toggle="modal"
            data-target="#unpublishModal"
            data-id="{{ $recipe->id }}"
            data-url="{{ url('admin/recipes/unpublish', $recipe) }}"
            title="Unpublish Recipe"
            >
            <i class="{{ config('icons.publish') }} text-warning"></i>
            Unpublish Recipe
         </button>
      @else
         <button type="button"
            class="publish-model btn btn-block btn-default mt-2"
            data-toggle="modal"
            data-target="#publishModal"
            data-id="{{ $recipe->id }}"
            data-url="{{ url('admin/recipes/publish', $recipe) }}"
            title="Publish Recipe"
            >
            <i class="{{ config('icons.publish') }}"></i>
            Publish Recipe
         </button>
      @endif
   @endif
</form>
