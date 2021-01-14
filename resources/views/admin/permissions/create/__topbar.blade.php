<div class="row-col mb-2">

   <button type="submit" class="btn btn-sm btn-success" name="submit" value="save" title="Save and Close">
      <i class="{{ config('icons.save') }}"></i>
      <div class="d-none d-lg-inline">
         Save and Close
      </div>
   </button>

   <button type="submit" class="btn btn-sm btn-info" name="submit" value="new" title="Save and New">
      <i class="{{ config('icons.save_new') }}"></i>
      <div class="d-none d-lg-inline">
         Save and New
      </div>
   </button>

   <button type="reset"class="btn btn-sm btn-light border" title="Reset Form">
      <i class="{{ config('icons.reset') }}"></i>
      <div class="d-none d-lg-inline">
         Reset Form
      </div>
   </button>

   <a href="{{ route('admin.permissions.index') }}" class="btn btn-sm btn-light border" title="Cancel">
      <i class="{{ config('icons.back') }}"></i>
      <div class="d-none d-lg-inline">
         Cancel
      </div>
   </a>
   
   <a href="#" class="btn btn-sm btn-light border float-right" data-toggle="modal" data-target="#helpModal" title="Help">
      <i class="{{ config('icons.help') }}"></i>
      <div class="d-none d-lg-inline">
         Help
      </div>
   </a>

</div>
