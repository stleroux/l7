

<?php echo $__env->make('admin.carvings.show.sections.stylesheet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.carvings.show.sections.pageHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.carvings.show.sections.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.carvings.show.sections.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.carvings.show.sections.blocks', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.carvings.show.sections.formBegin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.carvings.show.sections.formEnd', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>



   <?php echo $__env->make('admin.carvings.forms.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   <div class="row">
      <div class="col">
         
         <?php echo $__env->make('admin.carvings.comments', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
   </div>

   

   <?php echo $__env->make('admin.carvings.help', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
   <script>
      $('.modal').on('shown.bs.modal', function (e) {
         $('.carousel').carousel('pause');
   })
   </script>
   <script>
      $('.modal').on('hide.bs.modal',function (e) {
         $('.carousel').carousel('cycle');
      })
   </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.admin-10-2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/admin/carvings/show.blade.php ENDPATH**/ ?>