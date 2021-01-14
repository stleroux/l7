<div class="row-col mb-2">

   <button type="submit" class="btn btn-sm btn-success" name="submit" value="save">
      <i class="{{ config('icons.save') }}"></i>
      Save and Close
   </button>
   
   <button type="submit" class="btn btn-sm btn-info" name="submit"value="continue">
      <i class="{{ config('icons.save_continue') }}"></i>
      Save and Continue
   </button>

   <button type="reset" class="btn btn-sm btn-light border">
      <i class="{{ config('icons.reset') }}"></i>
      Reset Form
   </button>

   <a href="{{ route('admin.projects.index') }}"
      class="btn btn-sm btn-light border">
      <i class="{{ config('icons.back') }}"></i>
      Cancel
   </a>

   <a href="#" class="btn btn-sm btn-light border float-right mx-2" data-toggle="modal" data-target="#helpModal">
      <i class="{{ config('icons.help') }}"></i>
      Help
   </a>

</div>