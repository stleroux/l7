

<?php $__env->startSection('stylesheet'); ?>
   <link rel="stylesheet" href="<?php echo e(asset('css/UI/woodbarn.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
   <i class="<?php echo e(config('icons.carvings')); ?>"></i>
   Types of Carvings Offered
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
   <li class="breadcrumb-item">Offerings</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightColumn'); ?>
   <?php echo $__env->make('UI.carvings.blocks.popular', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   
   <?php echo $__env->make('UI.carvings.blocks.general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

   <?php $__currentLoopData = $offerings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $offering): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="card card-trans-4">
         <div class="card-header card-trans-2 py-1 pl-3">
            <div class="card-title font-weight-bold">
               <?php echo e(ucwords($offering->name)); ?>

            </div>
         </div>
         <div class="card-body p-0">
            <ul>
               <?php $__currentLoopData = \App\Models\Offering::where(['category' => $offering->id])->orderBy('name')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li>
                     <?php echo e(ucwords($element->name)); ?>

                  </li>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
         </div>
      </div>
      
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

   <div class="alert alert-warning p-1">Stay tuned for more items to be added.</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.UI.app-10-2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/UI/offerings/index.blade.php ENDPATH**/ ?>