<a href="{{ route('admin.recipes.index') }}" class="btn btn-block btn-light border" title="Recipes">
   <i class="{{ Config::get('icons.recipes') }}"></i>
   <div class="d-none d-lg-inline">
      Recipes
   </div>
</a>

@if(app('router')->getRoutes()->match(app('request')->create(url()->previous()))->getName() == "admin.recipes.show")
   <a href="{{ url()->previous() }}" class="btn btn-block btn-default" title="Back">
      <i class="{{ Config::get('icons.back') }}"></i>
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
            <i class="{{ Config::get('icons.add') }}"></i>
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
               <i class="{{ Config::get('icons.trash') }}"></i>
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
               <i class="{{ Config::get('icons.delete') }}"></i>
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
               <i class="{{ Config::get('icons.restore') }}"></i>
               Restore Selected Recipes
            </a>
         </form>
      @endif --}}

   <button type="submit" class="btn btn-block btn-outline-success" name="submit" value="update" title="Save and Close">
      <i class="{{ Config::get('icons.save') }}"></i>
      <div class="d-none d-lg-inline">
         Save and Close
      </div>
   </button>
   
   <button type="submit" class="btn btn-block btn-outline-info" name="submit" value="continue" title="Save and Continue">
      <i class="{{ Config::get('icons.save_continue') }}"></i>
      <div class="d-none d-lg-inline">
         Save and Continue
      </div>
   </button>

   <button type="reset" class="btn btn-block btn-light border" title="Reset Form">
      <i class="{{ Config::get('icons.reset') }}"></i>
      <div class="d-none d-lg-inline">
         Reset Form
      </div>
   </button>


   </div>
</div>
