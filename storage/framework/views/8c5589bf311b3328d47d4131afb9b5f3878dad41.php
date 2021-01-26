<a href="<?php echo e(route('admin.projects.index')); ?>" class="btn btn-block btn-default">
   <i class="<?php echo e(config('icons.back')); ?>"></i>
   <div class="d-none d-lg-inline">
      Cancel
   </div>
</a>

<div class="card card-primary mt-2">
   <div class="card-header p-2">Actions</div>
   <div class="card-body p-1">

      <button type="submit" class="btn btn-block btn-outline-success" name="submit" value="save">
         <i class="<?php echo e(config('icons.save')); ?>"></i>
         <div class="d-none d-lg-inline">
            Save and Close
         </div>
      </button>

      <button type="submit" class="btn btn-block btn-outline-info" name="submit" value="continue">
         <i class="<?php echo e(config('icons.save_new')); ?>"></i>
         <div class="d-none d-lg-inline">
            Save and Continue
         </div>
      </button>

      <button type="submit" class="btn btn-block btn-outline-primary" name="submit" value="new">
         <i class="<?php echo e(config('icons.save_new')); ?>"></i>
         <div class="d-none d-lg-inline">
            Save and New
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
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/projects/create/sections/functions/actions.blade.php ENDPATH**/ ?>