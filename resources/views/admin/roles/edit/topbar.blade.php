<div class="row-col mb-2">

   <button type="submit" class="btn btn-sm btn-success" name="submit" value="update">
      <i class="fas fa-save nav-icon"></i>
      Update and Close
   </button>
   
   <button type="submit" class="btn btn-sm btn-info" name="submit"value="continue">
      <i class="far fa-save nav-icon"></i>
      Update and Continue
   </button>

   <button type="reset" class="btn btn-sm btn-light border">
      <i class="fas fa-sync-alt nav-icon"></i>
      Reset Form
   </button>

   <a href="{{ route('admin.roles.index') }}"
      class="btn btn-sm btn-light border">
      <i class="fas fa-chevron-circle-left nav-icon"></i>
      Cancel
   </a>

   <a href="#" class="btn btn-sm btn-light border float-right mx-2" data-toggle="modal" data-target="#helpModal">
      <i class="nav-icon fas fa-question-circle"></i>
      Help
   </a>

</div>
