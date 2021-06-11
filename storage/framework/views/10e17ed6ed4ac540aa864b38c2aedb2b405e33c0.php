

<?php $__env->startSection('stylesheet'); ?>
   <link rel="stylesheet" href="<?php echo e(asset('css/UI/woodbarn.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
   <i class="<?php echo e(config('icons.features')); ?>"></i>
   View Requested Feature
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
   <li class="breadcrumb-item"><a href="<?php echo e(route('features.index')); ?>">Requested Features</a></li>
   <li class="breadcrumb-item">View Requested Feature</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightColumn'); ?>
   
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

   <?php echo $__env->make('UI.features.show.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   
   <div class="card card-trans-4 text-light">
      
      <div class="card-header">
         <div class="row">
            <div class="col">
               <div>
                  <?php echo e(ucfirst($feature->title)); ?>

               </div>
            </div>
            <div class="col text-right">
               Status: 
               <div class="badge badge-danger">
                  <?php if($feature->status): ?>
                     <?php echo e($feature->status); ?>

                  <?php else: ?>
                     N/A
                  <?php endif; ?>
               </div>
            </div>
         </div>
      </div>
      
      <div class="card-body p-2">
         
         <div class="bg-dark px-2 py-1">
            Description
         </div>
         <div class="pb-0">
            <?php echo $feature->description; ?>

         </div>

         <div class="bg-dark px-2 py-1">
            Resolution
         </div>
         <div class="pb-0">
            <?php if($feature->resolution): ?>
               <?php echo $feature->resolution; ?>

            <?php else: ?>
               N/A
            <?php endif; ?>
         </div>

      </div>

   </div>

   <?php echo $__env->make('help.index', ['title'=>'View Requested Feature', 'icon'=>'features', 'path'=>'UI.features.show'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.UI.app-8', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/UI/features/show.blade.php ENDPATH**/ ?>