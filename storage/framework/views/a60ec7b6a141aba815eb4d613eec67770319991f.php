

<?php $__env->startSection('stylesheet'); ?>
	<link rel="stylesheet" href="<?php echo e(asset('css/UI/carvings.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
   <i class="<?php echo e(config('icons.carvings')); ?>"></i>&nbsp;
   <?php echo e(ucwords($carving->name)); ?> Carving Information
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightColumn'); ?>
   
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

   <?php echo $__env->make('UI.carvings.show.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   <div class="card card-trans-2 p-2">

      <div class="row">
      
         <div class="col-12 col-xl-5">
            <?php echo $__env->make('UI.carvings.blocks.imageSlider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('UI.carvings.show.description', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         </div>
         
         <div class="col-12 col-xl-4">
            <?php echo $__env->make('UI.carvings.show.materials', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('UI.carvings.show.finishes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('UI.carvings.show.tags', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         </div>

         <div class="col-12 col-xl-3">
            <?php echo $__env->make('UI.carvings.show.information', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         </div>
      
      </div>

      <div class="row">
         <div class="col-xl-9">
            <?php echo $__env->make('common.view_more', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>         
         </div>
      </div>

      <div class="row">
         <div class="col-xl-9">
            <?php echo $__env->make('UI.carvings.show.comments', ['model'=>$carving], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         </div>
      
         <?php if(auth()->guard()->check()): ?>
            <div class="col-xl-3">
               <?php echo $__env->make('UI.carvings.show.leave_comment', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
         <?php endif; ?>
      </div>

   </div>

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

<?php echo $__env->make('layouts.UI.app-10', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/UI/carvings/show.blade.php ENDPATH**/ ?>