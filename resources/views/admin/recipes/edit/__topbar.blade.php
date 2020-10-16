<div class="row-col mb-2">

   <button type="submit" class="btn btn-sm btn-success" name="submit" value="update" title="Update and Close">
      <i class="{{ Config::get('icons.update') }}"></i>
      <div class="d-none d-lg-inline">
         Update and Close
      </div>
   </button>
   
   <button type="submit" class="btn btn-sm btn-info" name="submit" value="continue" title="Update and Continue">
      <i class="{{ Config::get('icons.update_continue') }}"></i>
      <div class="d-none d-lg-inline">
         Update and Continue
      </div>
   </button>

   <button type="reset" class="btn btn-sm btn-light border" title="Reset Form">
      <i class="{{ Config::get('icons.reset') }}"></i>
      <div class="d-none d-lg-inline">
         Reset Form
      </div>
   </button>

   <a href="{{ route('admin.recipes.index') }}" class="btn btn-sm btn-light border" title="Recipes">
      <i class="{{ Config::get('icons.recipes') }}"></i>
      <div class="d-none d-lg-inline">
         Recipes
      </div>
   </a>

   @if(app('router')->getRoutes()->match(app('request')->create(url()->previous()))->getName() == "admin.recipes.show")
      <a href="{{ url()->previous() }}" class="btn btn-sm btn-default" title="Back">
         <i class="{{ Config::get('icons.back') }}"></i>
         <div class="d-none d-lg-inline">
            Back
         </div>
      </a>
   @endif

   <div class="float-right">
      <a href="#" class="btn btn-sm btn-light border" data-toggle="modal" data-target="#helpModal" title="Help">
         <i class="{{ Config::get('icons.help') }}"></i>
         <div class="d-none d-lg-inline">
            Help
         </div>
      </a>
   </div>

</div>