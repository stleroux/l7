

<?php $__env->startSection('stylesheet'); ?>
   <link rel="stylesheet" href="<?php echo e(asset('css/UI/projects.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
   <i class="<?php echo e(config('icons.projects')); ?>"></i>
   <?php echo e(ucwords($project->name)); ?> Project Information
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightColumn'); ?>
   
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

   <?php echo $__env->make('UI.projects.show.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   <div class="card card-trans-2 p-1">
      <div class="card-body p-2">
         <div class="row">
            <div class="col-9">
               <div class="row">
                  <div class="col-7">
                     <?php echo $__env->make('UI.projects.blocks.imageSlider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                     <?php echo $__env->make('UI.projects.show.description', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>                  
                  </div>
                  <div class="col-5">
                     <?php echo $__env->make('UI.projects.show.materials', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                     <?php echo $__env->make('UI.projects.show.finishes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                     <?php echo $__env->make('UI.projects.show.tags', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>                  
                  </div>
               </div>
               <div class="row-col">
                  <?php echo $__env->make('common.view_more', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>               
               </div>
               <div class="row-col">
                  <?php echo $__env->make('UI.projects.show.comments', ['model'=>$project], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               </div>
            </div>
            <div class="col-3">
               <?php echo $__env->make('UI.projects.show.information', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>            
               <?php if(auth()->guard()->check()): ?>
                  <?php echo $__env->make('UI.projects.show.leave_comment', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               <?php endif; ?>
            </div>
         </div>
      </div>
   </div>


<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.UI.app-10', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/UI/projects/show.blade.php ENDPATH**/ ?>