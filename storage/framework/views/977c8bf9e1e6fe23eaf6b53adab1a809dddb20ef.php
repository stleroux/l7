<div class="row-col mb-2 float-right">

   <button type="submit" class="btn btn-sm btn-success" name="submit" value="save">
      <i class="<?php echo e(config('icons.save')); ?>"></i>
      <div class="d-none d-lg-inline">
         Save and Close
      </div>
   </button>

   <button type="submit" class="btn btn-sm btn-info" name="submit" value="new">
      <i class="<?php echo e(config('icons.save_new')); ?>"></i>
      <div class="d-none d-lg-inline">
         Save and New
      </div>
   </button>

   <button type="reset" class="btn btn-sm btn-light border">
      <i class="<?php echo e(config('icons.reset')); ?>"></i>
      <div class="d-none d-lg-inline">
         Reset Form
      </div>
   </button>

   <a href="<?php echo e(route('admin.movies.index')); ?>" class="btn btn-sm btn-light border">
      <i class="<?php echo e(config('icons.back')); ?>"></i>
      <div class="d-none d-lg-inline">
         Cancel
      </div>
   </a>

   <a href="#" class="btn btn-sm btn-light border float-right ml-1" data-toggle="modal" data-target="#helpModal">
      <i class="<?php echo e(config('icons.help')); ?>"></i>
      <div class="d-none d-lg-inline">
         Help
      </div>
   </a>
   
</div><?php /**PATH C:\sites\l7\resources\views/admin/movies/create/topbar.blade.php ENDPATH**/ ?>