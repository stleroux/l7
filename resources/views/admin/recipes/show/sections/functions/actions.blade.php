@if(Session::get('fromPage'))
   <a href="{{ Session::get('fromPage') }}"
      class="btn btn-block btn-default d-print-none"
      title="Back">
      <i class="{{ config('icons.back') }}"></i>
      Back
   </a>
@else
   <a href="\"
      class="btn btn-block btn-default d-print-none"
      title="Back">
      <i class="{{ config('icons.back') }}"></i>
      Back
   </a>
@endif

@if($next)
   <a href="{{ route('admin.recipes.show', $next) }}"
      class="btn btn-block btn-default"
      title="Next Recipe">
      <i class="{{ config('icons.next') }}"></i>
      Next
   </a>
@endif

@if($previous)
   <a href="{{ route('admin.recipes.show', $previous) }}"
      class="btn btn-block btn-default"
      title="Previous Recipe">
      <i class="{{ config('icons.previous') }}"></i>
      Previous
   </a>
@endif

<div class="card card-primary mt-2">
   <div class="card-header p-2">Actions</div>
   <div class="card-body p-1">

      @if($recipe->user_id == Auth::id() || Auth::user()->can('recipe-edit'))
         <a href="{{ route('admin.recipes.edit', $recipe->id) }}"
            class="btn btn-block btn-outline-primary"
            title="Edit Recipe">
            <i class="{{ config('icons.edit') }}"></i>
            Edit Recipe
         </a>
      @endif

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

      <a href="{{ route('recipes.print', $recipe->id) }}"
         class="btn btn-block btn-default mt-2"
         title="Print Recipe">
         <i class="{{ config('icons.print') }}"></i>
         <div class="d-none d-lg-inline">
            Print Recipe
         </div>
      </a>

      <a href="{{ route('recipes.printPDF', $recipe->id) }}"
         class="btn btn-block btn-default"
         title="Print Recipe to PDF">
         <i class="{{ config('icons.pdf') }}"></i>
         <div class="d-none d-lg-inline">
            Print to PDF
         </div>
      </a>

   </div>
</div>
