<div class="card card-primary">
   <div class="card-header p-2">Actions</div>
   <div class="card-body p-1">

      <button type="submit" class="btn btn-block btn-default">
         <i class="<?php echo e(config('icons.save')); ?>"></i>
         Save Settings
      </button>

      <button type="reset" class="btn btn-block btn-default" title="Reset Form">
         <i class="<?php echo e(config('icons.reset')); ?>"></i>
         <div class="d-none d-lg-inline">
            Reset Form
         </div>
      </button>

      <a href="<?php echo e(route('admin.settings.index')); ?>" class="btn btn-block btn-default">
         <i class="<?php echo e(config('icons.reload')); ?>"></i>
         Reload Settings
      </a>

   </div>
</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/settings/index/sections/functions/actions.blade.php ENDPATH**/ ?>