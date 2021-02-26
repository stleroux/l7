<div class="card card-primary">

   <div class="card-header p-2">Pages</div>
   
   <div class="card-body p-1">

      <a href="<?php echo e(route('admin.notifications.all')); ?>"
         class="btn btn-block btn-default text-left <?php echo e(request()->routeIs('admin.notifications.all') ? 'buttonActive' : ''); ?>">
         <i class="<?php echo e(config('icons.bell')); ?>"></i>
         All Notifications
         <div class="badge badge-dark badge-pill float-right mt-1">
            <?php echo e(Auth()->user()->notifications->count()); ?>

         </div>
      </a>

      <!-- Generate links based on options in Model -->


      <a href="<?php echo e(route('admin.notifications.unread')); ?>"
         class="btn btn-block btn-default text-left <?php echo e(request()->routeIs('admin.notifications.unread') ? 'buttonActive' : ''); ?>">
         <i class="<?php echo e(config('icons.bell')); ?>"></i>
         Unread Notifications
         <div class="badge badge-dark badge-pill float-right mt-1">
            <?php echo e(Auth()->user()->unreadNotifications->count()); ?>

         </div>
      </a>

      <a href="<?php echo e(route('admin.notifications.read')); ?>"
         class="btn btn-block btn-default text-left <?php echo e(request()->routeIs('admin.notifications.read') ? 'buttonActive' : ''); ?>">
         <i class="<?php echo e(config('icons.bell')); ?>"></i>
         Read Notifications
         <div class="badge badge-dark badge-pill float-right mt-1">
            <?php echo e(Auth()->user()->readNotifications->count()); ?>

         </div>
      </a>
      
   </div>
   
</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/notifications/index/blocks/pages.blade.php ENDPATH**/ ?>