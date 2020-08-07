<div class="row-col mb-2">

   <button type="submit" class="btn btn-sm btn-success" name="submit" value="update">
      <i class="{{ Config::get('icons.update') }}"></i>
      Update and Close
   </button>
   
   <button type="submit" class="btn btn-sm btn-info" name="submit" value="continue">
      <i class="{{ Config::get('icons.update_continue') }}"></i>
      Update and Continue
   </button>

   <button type="reset" class="btn btn-sm btn-light border">
      <i class="{{ Config::get('icons.reset') }}"></i>
      Reset Form
   </button>

   <a href="{{ route('admin.permissions.index') }}" class="btn btn-sm btn-light border">
      <i class="{{ Config::get('icons.back') }}"></i>
      Cancel
   </a>

   <a href="#" class="btn btn-sm btn-light border float-right" data-toggle="modal" data-target="#helpModal">
      <i class="{{ Config::get('icons.help') }}"></i>
      Help
   </a>

</div>
