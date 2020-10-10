<div class="row-col mb-2 text-right">

   <button type="submit" class="btn btn-sm btn-success" name="submit" value="save">
      <i class="{{ Config::get('icons.save') }}"></i>
      <div class="d-none d-lg-inline">
         Save and Close
      </div>
   </button>

   <button type="submit" class="btn btn-sm btn-info" name="submit" value="new">
      <i class="{{ Config::get('icons.save_new') }}"></i>
      <div class="d-none d-lg-inline">
         Save and New
      </div>
   </button>

   <button type="reset" class="btn btn-sm btn-light border">
      <i class="{{ Config::get('icons.reset') }}"></i>
      <div class="d-none d-lg-inline">
         Reset Form
      </div>
   </button>

   <a href="{{ route('features.index') }}" class="btn btn-sm btn-light border">
      <i class="{{ Config::get('icons.back') }}"></i>
      <div class="d-none d-lg-inline">
         Cancel
      </div>
   </a>

   <a href="#" class="btn btn-sm btn-light border" data-toggle="modal" data-target="#helpModal">
      <i class="{{ Config::get('icons.help') }}"></i>
      <div class="d-none d-lg-inline">
         Help
      </div>
   </a>
   
</div>
