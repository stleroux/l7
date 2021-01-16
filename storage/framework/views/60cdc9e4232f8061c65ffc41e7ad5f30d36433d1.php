<div class="card card-primary">
   <div class="card-header p-2">Pages</div>
   <div class="card-body p-1">

      <a href="<?php echo e(route('admin.permissions.index')); ?>"
         class="btn btn-block btn-default text-left <?php echo e(request()->routeIs('admin.permission.index') ? 'buttonActive' : ''); ?>">
         <i class="<?php echo e(config('icons.permissions')); ?>"></i>
         All Permissions
         <div class="badge badge-dark badge-pill float-right mt-1">
            <?php echo e(App\Models\Permission::count()); ?>

         </div>
      </a>
      
      <a href="<?php echo e(route('admin.permissions.trashed')); ?>"
         class="btn btn-block btn-default text-left <?php echo e(request()->routeIs('admin.permissions.trashed') ? 'buttonActive' : ''); ?>">
         <i class="<?php echo e(config('icons.trashed')); ?> text-pink"></i>
         Trashed Permissions
         <div class="badge badge-dark badge-pill float-right mt-1">
            <?php echo e(App\Models\Permission::trashedCount()->count()); ?>

         </div>
      </a>



      
   </div>
</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/permissions/index/sections/functions/pages.blade.php ENDPATH**/ ?>