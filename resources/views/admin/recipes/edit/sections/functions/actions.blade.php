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

      <button type="submit" class="btn btn-block btn-outline-success" name="submit" value="update" title="Update and Close">
         <i class="{{ config('icons.update') }}"></i>
         <div class="d-none d-lg-inline">
            Update and Close
         </div>
      </button>
      
      <button type="submit" class="btn btn-block btn-outline-info" name="submit" value="continue" title="Update and Continue">
         <i class="{{ config('icons.update_continue') }}"></i>
         <div class="d-none d-lg-inline">
            Update and Continue
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
