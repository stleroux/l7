

<?php $__env->startSection('stylesheet'); ?>
   <link rel="stylesheet" href="<?php echo e(asset('css/UI/woodbarn.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
      View Bug Report
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
   <li class="breadcrumb-item">Bug Reports</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightColumn'); ?>
   
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

   <?php echo $__env->make('UI.bugs.show.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   
   <div class="card card-trans-4">
      
      <div class="card-header">
         <div class="row">
            <div class="col">
               <div>
                  <?php echo e(ucfirst($bug->title)); ?>

               </div>
            </div>
            <div class="col text-right">
               Status: 
               <div class="badge badge-danger">
                  <?php if($bug->status): ?>
                     <?php echo e($bug->status); ?>

                  <?php else: ?>
                     N/A
                  <?php endif; ?>
               </div>
            </div>
         </div>
      </div>
      
      <div class="card-body p-2">
         
         <div class="bg-dark px-2 py-1">
            Page URL
         </div>
         <div class="pb-3">
            <?php echo e($bug->page_url); ?>

         </div>
         
         <div class="bg-dark px-2 py-1">
            Description
         </div>
         <div class="pb-0">
            <?php echo $bug->description; ?>

         </div>

         <div class="bg-dark px-2 py-1">
            Resolution
         </div>
         <div class="pb-0">
            <?php if($bug->resolution): ?>
               <?php echo $bug->resolution; ?>

            <?php else: ?>
               N/A
            <?php endif; ?>
         </div>

      </div>

   </div>

   <?php echo $__env->make('help.index', ['title'=>'Show Bug Report', 'icon'=>'bugs', 'path'=>'UI.bugs.show'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.UI.app-8', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/UI/mylinks/show.blade.php ENDPATH**/ ?>