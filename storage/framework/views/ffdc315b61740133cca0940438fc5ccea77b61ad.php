

<?php $__env->startSection('stylesheet'); ?>
   <link rel="stylesheet" href="<?php echo e(asset('css/UI/woodbarn.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
   <i class="<?php echo e(config('icons.contact-us')); ?>"></i>
   Thank you for your message
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
   <li class="breadcrumb-item">Contact Us</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

   <div class="card card-trans-2 text-center text-light mb-2">
      
      

      <div class="card-body p-2">
         <p>Thank you for contacting us.</p>
         <p>We will be in touch shortly if needed.</p>
      </div>

   </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.UI.app-10', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/UI/contactForm/thankyou.blade.php ENDPATH**/ ?>