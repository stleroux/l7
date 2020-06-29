<div class="row-col mb-2">

   <button type="submit" class="btn btn-sm btn-success" name="submit" value="save">
      <i class="fas fa-save nav-icon"></i>
      Save and Close
   </button>

   <button type="submit" class="btn btn-sm btn-info" name="submit" value="new">
      <i class="fas fa-user-plus nav-icon"></i>
      Save and New
   </button>

   <button type="reset"class="btn btn-sm btn-light border">
      <i class="fas fa-sync-alt nav-icon"></i>
      Reset Form
   </button>

   <a href="{{ route('admin.permissions.index') }}" class="btn btn-sm btn-light border">
      <i class="fas fa-chevron-circle-left nav-icon"></i>
      Cancel
   </a>
   
   <a href="#" class="btn btn-sm btn-light border float-right" data-toggle="modal" data-target="#helpModal">
      <i class="nav-icon fas fa-question-circle"></i>
      Help
   </a>

</div>
