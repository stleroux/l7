<div class="row mb-2 text-right">
   <div class="col">

   <button type="submit" class="btn btn-sm btn-success" name="submit" value="update">
      <i class="{{ config('icons.update') }}"></i>
      <div class="d-none d-lg-inline">
         Update
      </div>
   </button>
   
   {{-- <button type="submit" class="btn btn-sm btn-info" name="submit"value="continue">
      <i class="{{ config('icons.update_continue') }}"></i>
      <div class="d-none d-lg-inline">
         Update and Continue
      </div>
   </button> --}}

   <button type="reset" class="btn btn-sm btn-light border">
      <i class="{{ config('icons.reset') }}"></i>
      <div class="d-none d-lg-inline">
         Reset Form
      </div>
   </button>

   <a href="{{ route('mylinks.index') }}"
      class="btn btn-sm btn-light border">
      <i class="{{ config('icons.back') }}"></i>
      <div class="d-none d-lg-inline">
         Back
      </div>
   </a>

   <a href="#" class="btn btn-sm btn-light border" data-toggle="modal" data-target="#helpModal">
      <i class="{{ config('icons.help') }}"></i>
      <div class="d-none d-lg-inline">
         Help
      </div>
   </a>
</div>

</div>
