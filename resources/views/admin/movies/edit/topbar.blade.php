<div class="row-col mb-2">

   <button type="submit" class="btn btn-sm btn-success" name="submit" value="update">
      <i class="{{ Config::get('icons.update') }}"></i>
      <div class="d-none d-lg-inline">
         Update and Close
      </div>
   </button>
   
   <button type="submit" class="btn btn-sm btn-info" name="submit"value="continue">
      <i class="{{ Config::get('icons.update_continue') }}"></i>
      <div class="d-none d-lg-inline">
         Update and Continue
      </div>
   </button>

   <button type="reset" class="btn btn-sm btn-light border">
      <i class="{{ Config::get('icons.reset') }}"></i>
      <div class="d-none d-lg-inline">
         Reset Form
      </div>
   </button>

   <a href="{{ route('admin.movies.index') }}"
      class="btn btn-sm btn-light border">
      <i class="{{ Config::get('icons.back') }}"></i>
      <div class="d-none d-lg-inline">
         Cancel
      </div>
   </a>

   <a href="#" class="btn btn-sm btn-light border float-right mx-2" data-toggle="modal" data-target="#helpModal">
      <i class="{{ Config::get('icons.help') }}"></i>
      <div class="d-none d-lg-inline">
         Help
      </div>
   </a>

</div>
