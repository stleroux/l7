<?php $__env->startSection('formBegin'); ?>
   <form action="<?php echo e(route('admin.users.update', $user)); ?>" method="POST">
      <?php echo csrf_field(); ?>
      <?php echo method_field('PUT'); ?>
<?php $__env->stopSection(); ?><?php /**PATH C:\sites\l7\resources\views/admin/users/edit/sections/formBegin.blade.php ENDPATH**/ ?>