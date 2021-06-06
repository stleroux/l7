<?php $__env->startSection('formBegin'); ?>
   <form action="<?php echo e(route('admin.projects.update', $project)); ?>" method="POST" enctype="multipart/form-data" class="m-0 p-0">
      <?php echo method_field('PUT'); ?>
      <?php echo csrf_field(); ?>
<?php $__env->stopSection(); ?><?php /**PATH C:\sites\l7\resources\views/admin/projects/edit/sections/formBegin.blade.php ENDPATH**/ ?>