<div class="card card-primary">

   <div class="card-header p-2">Actions</div>

   <div class="card-body p-1">

      <?php if(Route::currentRouteName() == 'admin.notifications.all'): ?>
         <?php echo $__env->make('admin.notifications.actions.markAllRead', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->make('admin.notifications.actions.markAllUnread', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->make('admin.notifications.actions.destroyAll', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php endif; ?>

      <?php if(Route::currentRouteName() == 'admin.notifications.unread'): ?>
         <?php echo $__env->make('admin.notifications.actions.markAllRead', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         
         <?php echo $__env->make('admin.notifications.actions.destroyAll', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php endif; ?>

      <?php if(Route::currentRouteName() == 'admin.notifications.read'): ?>
         
         <?php echo $__env->make('admin.notifications.actions.markAllUnread', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->make('admin.notifications.actions.destroyAll', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php endif; ?>

   </div>
</div>
<?php /**PATH C:\sites\l7\resources\views/admin/notifications/index/blocks/actions.blade.php ENDPATH**/ ?>