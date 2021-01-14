   <button type="submit" class="btn btn-sm btn-success" name="submit" value="update" title="Save and Close">
      <i class="{{ config('icons.save') }}"></i>
      <div class="d-none d-lg-inline">
         Save and Close
      </div>
   </button>
   
   <button type="submit" class="btn btn-sm btn-info" name="submit" value="continue" title="Save and Continue">
      <i class="{{ config('icons.save_continue') }}"></i>
      <div class="d-none d-lg-inline">
         Save and Continue
      </div>
   </button>

   <button type="reset" class="btn btn-sm btn-light border" title="Reset Form">
      <i class="{{ config('icons.reset') }}"></i>
      <div class="d-none d-lg-inline">
         Reset Form
      </div>
   </button>

   <a href="{{ route('admin.recipes.index') }}" class="btn btn-sm btn-light border" title="Recipes">
      <i class="{{ config('icons.recipes') }}"></i>
      <div class="d-none d-lg-inline">
         Recipes qqq
      </div>
   </a>

   @if(app('router')->getRoutes()->match(app('request')->create(url()->previous()))->getName() == "admin.recipes.show")
      <a href="{{ url()->previous() }}" class="btn btn-sm btn-default" title="Back">
         <i class="{{ config('icons.back') }}"></i>
         <div class="d-none d-lg-inline">
            Back
         </div>
      </a>
   @endif