<div class="card card-primary">
   <div class="card-header p-2">Pages</div>
   <div class="card-body p-1">

      <a href="<?php echo e(route('admin.roles.index')); ?>"
         class="btn btn-block btn-default text-left <?php echo e(request()->routeIs('admin.roles.index') ? 'buttonActive' : ''); ?>">
         <i class="<?php echo e(config('icons.roles')); ?>"></i>
         All Roles
         <div class="badge badge-dark badge-pill float-right mt-1">
            <?php echo e(App\Models\Role::count()); ?>

         </div>
      </a>

      <a href="<?php echo e(route('admin.roles.trashed')); ?>"
         class="btn btn-block btn-default text-left <?php echo e(request()->routeIs('admin.roles.trashed') ? 'buttonActive' : ''); ?>">
         <i class="<?php echo e(config('icons.trashed')); ?> text-pink"></i>
         Trashed Roles
         <div class="badge badge-dark badge-pill float-right mt-1">
            <?php echo e(App\Models\Role::trashedCount()->count()); ?>

         </div>
      </a>
      
   </div>
</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/roles/index/sections/functions/pages.blade.php ENDPATH**/ ?>