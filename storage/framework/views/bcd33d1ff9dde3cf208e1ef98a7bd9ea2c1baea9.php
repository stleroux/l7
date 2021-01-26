<a href="<?php echo e(route('admin.projects.index')); ?>"
   class="btn btn-block btn-default">
   <i class="<?php echo e(config('icons.back')); ?>"></i>
   <div class="d-none d-lg-inline">
      Cancel
   </div>
</a>

<div class="card card-primary mt-2">
   <div class="card-header p-2">Actions</div>
   <div class="card-body p-1">

      <button type="submit" class="btn btn-block btn-outline-success" name="submit" value="update">
         <i class="<?php echo e(config('icons.update')); ?>"></i>
         <div class="d-none d-lg-inline">
            Update and Close
         </div>
      </button>
      
      <button type="submit" class="btn btn-block btn-outline-info" name="submit" value="continue">
         <i class="<?php echo e(config('icons.update_continue')); ?>"></i>
         <div class="d-none d-lg-inline">
            Update and Continue
         </div>
      </button>

      <button type="reset" class="btn btn-block btn-default">
         <i class="<?php echo e(config('icons.reset')); ?>"></i>
         <div class="d-none d-lg-inline">
            Reset Form
         </div>
      </button>

   </div>
</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/projects/edit/sections/functions/actions.blade.php ENDPATH**/ ?>