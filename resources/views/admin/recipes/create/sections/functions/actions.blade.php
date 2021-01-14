<a href="{{ route('admin.recipes.index') }}" class="btn btn-block btn-default" title="Recipes">
   <i class="{{ config('icons.back') }}"></i>
   <div class="d-none d-lg-inline">
      Back
   </div>
</a>

@if(app('router')->getRoutes()->match(app('request')->create(url()->previous()))->getName() == "admin.recipes.show")
   <a href="{{ url()->previous() }}" class="btn btn-block btn-default" title="Back">
      <i class="{{ config('icons.back') }}"></i>
      <div class="d-none d-lg-inline">
         Back
      </div>
   </a>
@endif

<div class="card card-primary mt-2">
   <div class="card-header p-2">Actions</div>
   <div class="card-body p-1">

{{--       @can('user-create')
         <a href="{{ route('admin.recipes.create') }}" class="btn btn-block btn-outline-success">
            <i class="{{ config('icons.add') }}"></i>
            <div class="d-none d-lg-inline">
               Create Recipe
            </div>
         </a>
      @endcan

      @if(Route::currentRouteName() != 'admin.recipes.trashed')
         <form action="{{ route('admin.recipes.mass_destroy') }}" method="post" class="">
            @csrf
            @method('DELETE')
            <input type="hidden" name="mass_destroy_ids" id="mass_destroy_ids" value="" size="3" />
            <a data-toggle="modal"
               class="btn btn-block btn-outline-pink mt-2"
               id="btn_multidestroy"
               style="display:none"
               data-target="#massDestroy-modal">
               <i class="{{ config('icons.trash') }}"></i>
               Trash Selected Recipes
            </a>
         </form>
      @endif

      @if(Route::currentRouteName() == 'admin.recipes.trashed')
         <form action="{{ route('admin.recipes.mass_delete') }}" method="post">
            @csrf
            @method('DELETE')
            <input type="hidden" name="mass_delete_ids" id="mass_delete_ids" value="" size="3" />
            <a data-toggle="modal"
               class="btn btn-block btn-outline-danger mt-2"
               id="btn_multidelete"
               style="display:none"
               data-target="#massDelete-modal">
               <i class="{{ config('icons.delete') }}"></i>
               Delete Selected Recipes
            </a>
         </form>

         <form action="" method="POST">
            @csrf
            <input type="hidden" name="mass_restore_ids" id="mass_restore_ids" value="" size="3" />
            <a 
               data-toggle="modal"
               class="btn btn-block btn-outline-primary mt-2"
               id="btn_multirestore"
               style="display:none"
               data-target="#massRestore-modal">
               <i class="{{ config('icons.restore') }}"></i>
               Restore Selected Recipes
            </a>
         </form>
      @endif --}}

      <button type="submit" class="btn btn-block btn-outline-success" name="submit" value="save" title="Save and Close">
         <i class="{{ config('icons.save') }}"></i>
         <div class="d-none d-lg-inline">
            Save and Close
         </div>
      </button>
      
      <button type="submit" class="btn btn-block btn-outline-info" name="submit" value="continue" title="Save and Continue">
         <i class="{{ config('icons.save_continue') }}"></i>
         <div class="d-none d-lg-inline">
            Save and Continue
         </div>
      </button>

      <button type="submit" class="btn btn-block btn-outline-primary" name="submit" value="new">
         <i class="{{ config('icons.save_new') }}"></i>
         <div class="d-none d-lg-inline">
            Save and New
         </div>
      </button>

      <button type="reset" class="btn btn-block btn-default" title="Reset Form">
         <i class="{{ config('icons.reset') }}"></i>
         <div class="d-none d-lg-inline">
            Reset Form
         </div>
      </button>


   </div>
</div>
