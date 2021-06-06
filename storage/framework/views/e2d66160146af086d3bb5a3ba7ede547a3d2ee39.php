

<?php $__env->startSection('stylesheet'); ?>
   <link rel="stylesheet" href="<?php echo e(asset('css/UI/woodbarn.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
   <i class="<?php echo e(config('icons.about-us')); ?>"></i>
   About Us
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
   <li class="breadcrumb-item">About Us</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightColumn'); ?>
   
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

   <?php echo $__env->make('errors.construction', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   
   <div class="card card-trans-4 mb-2">
      <div class="card-header section_header">
         <i class="<?php echo e(config('icons.about-us')); ?>"></i>
         About Us
      </div>

      <div class="card-body text-light">
         <p>Just some text about us</p>
      </div>
   </div>

   <div class="row">
      
      <div class="col-sm-6 pr-1">
         <div class="card card-trans-4 mb-2">
            <div class="card-header section_header">
               <i class="<?php echo e(config('icons.male')); ?>"></i>
               About Stephane
            </div>
            <div class="card-body text-light">
               <p>Just some text about me</p>
               <p>Just some text about me</p>
            </div>
         </div>
      </div>

      
      <div class="col-sm-6 pl-1">
         <div class="card card-trans-4 mb-2">
            <div class="card-header section_header">
               <i class="<?php echo e(config('icons.female')); ?>"></i>
               About Stacie
            </div>
            <div class="card-body text-light">
               <p>Just some text about her</p>
               <p>Just some text about her Just some text about her Just some text about her Just some text about her Just some text about her Just some text about her Just some text about her Just some text about her Just some text about her Just some text about her Just some text about her Just some text about her Just some text about her Just some text about her Just some text about her Just some text about her Just some text about her Just some text about her Just some text about her</p>
            </div>
         </div>
      </div>

   </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.UI.app-10', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/UI/about.blade.php ENDPATH**/ ?>