<?php $__env->startSection('formBegin'); ?>
   <form action="<?php echo e(route('admin.posts.update', $post)); ?>" method="POST" enctype="multipart/form-data">
      <?php echo csrf_field(); ?>
      <?php echo method_field('PUT'); ?>
<?php $__env->stopSection(); ?><?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/posts/edit/sections/formBegin.blade.php ENDPATH**/ ?>