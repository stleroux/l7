<div class="card card-primary">
   <div class="card-header p-2">Pages</div>
   <div class="card-body p-1">

      <a href="<?php echo e(route('admin.users.index')); ?>"
         class="btn btn-block btn-default text-left <?php echo e(request()->routeIs('admin.users.index') ? 'buttonActive' : ''); ?>">
         <i class="<?php echo e(config('icons.users')); ?>" ></i>
         All Users
         <div class="badge badge-dark badge-pill float-right mt-1">
            <?php echo e(App\Models\User::count()); ?>

         </div>
      </a>

      <a href="<?php echo e(route('admin.users.approved')); ?>"
         class="btn btn-block btn-default text-left <?php echo e(request()->routeIs('admin.users.approved') ? 'buttonActive' : ''); ?>">
         <i class="<?php echo e(config('icons.approved')); ?> text-primary"></i>
         Approved Users
         <div class="badge badge-dark badge-pill float-right mt-1">
            <?php echo e(App\Models\User::approved()->count()); ?>

         </div>
      </a>

      <a href="<?php echo e(route('admin.users.disabled')); ?>"
         class="btn btn-block btn-default text-left <?php echo e(request()->routeIs('admin.users.disabled') ? 'buttonActive' : ''); ?>">
         <i class="<?php echo e(config('icons.disabled')); ?> text-pink"></i>
         Disabled Users
         <div class="badge badge-dark badge-pill float-right mt-1">
            <?php echo e(App\Models\User::disabled()->count()); ?>

         </div>
      </a>

      <a href="<?php echo e(route('admin.users.noRoles')); ?>"
         class="btn btn-block btn-default text-left <?php echo e(request()->routeIs('admin.users.noRoles') ? 'buttonActive' : ''); ?>">
         <i class="<?php echo e(config('icons.role')); ?> text-primary"></i>
         Users Without Roles
         <div class="badge badge-dark badge-pill float-right mt-1">
            
            
               <?php echo e(App\Models\User::withCount('roles')->has('roles', 0)->count()); ?>

            
            
         </div>
      </a>

      <a href="<?php echo e(route('admin.users.trashed')); ?>"
         class="btn btn-block btn-default text-left <?php echo e(request()->routeIs('admin.users.trashed') ? 'buttonActive' : ''); ?>">
         <i class="<?php echo e(config('icons.trashed')); ?> text-pink"></i>
         Trashed Users
         <div class="badge badge-dark badge-pill float-right mt-1">
            <?php echo e(App\Models\User::trashedCount()->count()); ?>

         </div>
      </a>
      
   </div>
</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/users/index/blocks/pages.blade.php ENDPATH**/ ?>