

<?php $__env->startSection('stylesheet'); ?>
   <link rel="stylesheet" href="<?php echo e(asset('css/UI/woodbarn.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
   <i class="<?php echo e(config('icons.cart')); ?>"></i>
   Quote Request Submission
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
   <li class="breadcrumb-item">Quote Request</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightColumn'); ?>
   
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

   <div class="row-col">
      <div class="card card-trans-4">
         <div class="card-body">
            <p>
               Thank you for your submission.               
            </p>
            <p>
               Someone will contact you shortly regarding your quote request.
            </p>
         </div>
      </div>
   </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.UI.app-8', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/UI/cart/thankyou.blade.php ENDPATH**/ ?>