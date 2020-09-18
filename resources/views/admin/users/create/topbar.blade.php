<div class="row-col mb-2">

   <button type="submit" class="btn btn-sm btn-success" name="submit" value="save" title="Save and Close">
      <i class="{{ Config::get('icons.save') }}"></i>
      <div class="d-none d-lg-inline">
         Save and Close
      </div>
   </button>

   <button type="submit" class="btn btn-sm btn-info" name="submit" value="continue" title="Save and Continue Editing">
      <i class="{{ Config::get('icons.save_continue') }}"></i>
      <div class="d-none d-lg-inline">
         Save and Continue Editing
      </div>
   </button>

   <button type="submit" class="btn btn-sm btn-primary" name="submit" value="new" title="Save and Create New">
      <i class="{{ Config::get('icons.save_new') }}"></i>
      <div class="d-none d-lg-inline">
         Save and Create New
      </div>
   </button>

   <button type="reset" class="btn btn-sm btn-light border" title="Reset Form">
      <i class="{{ Config::get('icons.reset') }}"></i>
      <div class="d-none d-lg-inline">
         Reset Form
      </div>
   </button>

   <a href="{{ route('admin.users.index') }}" class="btn btn-sm btn-light border" title="Cancel">
      <i class="{{ Config::get('icons.back') }}"></i>
      <div class="d-none d-lg-inline">
         Cancel
      </div>
   </a>

   <a href="#" class="btn btn-sm btn-light border float-right mx-2" data-toggle="modal" data-target="#helpModal" title="Help">
      <i class="{{ Config::get('icons.help') }}"></i>
      <div class="d-none d-lg-inline">
         Help
      </div>
   </a>

</div>
