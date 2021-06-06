<div class="col mt-2">

   <div class="float-right">
      
      <button type="submit" class="btn btn-sm btn-success" name="submit" value="update" title="Update and Close">
         <i class="<?php echo e(config('icons.update')); ?>"></i>
         <div class="d-none d-lg-inline">
            Update and Close
         </div>
      </button>

      <button type="submit" class="btn btn-sm btn-info" name="submit" value="continue" title="Update and Continue">
         <i class="<?php echo e(config('icons.update_continue')); ?>"></i>
         <div class="d-none d-lg-inline">
            Update and Continue
         </div>
      </button>

      <button type="reset" class="btn btn-sm btn-light border" title="Reset Form">
         <i class="<?php echo e(config('icons.reset')); ?>"></i>
         <div class="d-none d-lg-inline">
            Reset Form
         </div>
      </button>

      <a href="<?php echo e(route('homepage')); ?>" class="btn btn-sm btn-light border" title="Cancel">
         <i class="<?php echo e(config('icons.back')); ?>"></i>
         <div class="d-none d-lg-inline">
            Cancel
         </div>
      </a>

      <a href="#" class="btn btn-sm btn-light border" data-toggle="modal" data-target="#helpModal" title="Help">
         <i class="<?php echo e(config('icons.help')); ?>"></i>
         <div class="d-none d-lg-inline">
            Help
         </div>
      </a>

   </div>

</div>
<?php /**PATH C:\sites\l7\resources\views/UI/profile/edit/topbar.blade.php ENDPATH**/ ?>