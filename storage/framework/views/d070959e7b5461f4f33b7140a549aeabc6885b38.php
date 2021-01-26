<?php $__env->startSection('formBegin'); ?>
   <form action="<?php echo e(route('admin.categories.update', $category)); ?>" method="POST">
      <?php echo csrf_field(); ?>
      <?php echo method_field('PUT'); ?>
<?php $__env->stopSection(); ?><?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/categories/edit/sections/formBegin.blade.php ENDPATH**/ ?>