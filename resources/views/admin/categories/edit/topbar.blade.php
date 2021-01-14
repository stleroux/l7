<div class="row-col mb-2">

   <button type="submit" class="btn btn-sm btn-success" name="submit" value="update">
      <i class="{{ config('icons.update') }}"></i>
      Update and Close
   </button>

   <button type="submit" class="btn btn-sm btn-info" name="submit" value="continue">
      <i class="{{ config('icons.update_continue') }}"></i>
      Update and Continue
   </button>

   <a href="{{ route('admin.categories.index') }}"
      class="btn btn-sm btn-light border">
      <i class="{{ config('icons.back') }}"></i>
      Cancel
   </a>

   <a href="#" class="btn btn-sm btn-light border float-right" data-toggle="modal" data-target="#helpModal">
      <i class="{{ config('icons.help') }}"></i>
      Help
   </a>

</div>
