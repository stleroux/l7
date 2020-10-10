<div class="row-col mb-2 text-right">

{{--    <button type="submit" class="btn btn-sm btn-success" name="submit" value="update">
      <i class="{{ Config::get('icons.update') }}"></i>
      <div class="d-none d-lg-inline">
         Update
      </div>
   </button>
 --}}   
   {{-- <button type="submit" class="btn btn-sm btn-info" name="submit"value="continue">
      <i class="{{ Config::get('icons.update_continue') }}"></i>
      <div class="d-none d-lg-inline">
         Update and Continue
      </div>
   </button> --}}

{{--    <button type="reset" class="btn btn-sm btn-light border">
      <i class="{{ Config::get('icons.reset') }}"></i>
      <div class="d-none d-lg-inline">
         Reset Form
      </div>
   </button> --}}

   <a href="{{ route('features.index') }}"
      class="btn btn-sm btn-light border">
      <i class="{{ Config::get('icons.back') }}"></i>
      <div class="d-none d-lg-inline">
         Back
      </div>
   </a>

   <a href="#" class="btn btn-sm btn-light border" data-toggle="modal" data-target="#helpModal">
      <i class="{{ Config::get('icons.help') }}"></i>
      <div class="d-none d-lg-inline">
         Help
      </div>
   </a>

</div>
