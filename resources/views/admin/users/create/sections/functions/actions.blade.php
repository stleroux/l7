<a href="{{ route('admin.users.index') }}" class="btn btn-block btn-light border" title="Cancel">
   <i class="{{ Config::get('icons.back') }}"></i>
   <div class="d-none d-lg-inline">
      Return
   </div>
</a>

<div class="card card-primary mt-2">
   <div class="card-header p-2">Actions</div>
   <div class="card-body p-1">
      
      <button type="submit" class="btn btn-block btn-outline-success" name="submit" value="save" title="Save and Close">
         <i class="{{ Config::get('icons.save') }}"></i>
         <div class="d-none d-lg-inline">
            Save and Close
         </div>
      </button>

      <button type="submit" class="btn btn-block btn-outline-info" name="submit" value="continue" title="Save and Continue Editing">
         <i class="{{ Config::get('icons.save_continue') }}"></i>
         <div class="d-none d-lg-inline">
            Save and Continue Editing
         </div>
      </button>

      <button type="submit" class="btn btn-block btn-outline-primary" name="submit" value="new" title="Save and Create New">
         <i class="{{ Config::get('icons.save_new') }}"></i>
         <div class="d-none d-lg-inline">
            Save and Create New
         </div>
      </button>

      <button type="reset" class="btn btn-block btn-outline-secondary" title="Reset Form">
         <i class="{{ Config::get('icons.reset') }}"></i>
         <div class="d-none d-lg-inline">
            Reset Form
         </div>
      </button>

   </div>
</div>
