

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

   
   <?php if($aboutUs): ?>
      <div class="card card-trans-4">
         <div class="card-header section_header p-2">
            <i class="<?php echo e(config('icons.about-us')); ?>"></i>
            <?php echo e(ucwords($aboutUs->title)); ?>

         </div>

         <div class="card-body text-light p-2">
            <?php echo $aboutUs->body; ?>

         </div>
      </div>
   <?php endif; ?>

   <div class="row">
      <?php if($stephane): ?>
         
         <div class="col-sm-6 pr-1">
            <div class="card card-trans-4">
               <div class="card-header section_header p-2">
                  <i class="<?php echo e(config('icons.male')); ?>"></i>
                  <?php echo e(ucwords($stephane->title)); ?>

               </div>
               <div class="card-body text-light p-2">
                  <?php echo $stephane->body; ?>

               </div>
            </div>
         </div>
      <?php endif; ?>

      <?php if($stacie): ?>
         
         <div class="col-sm-6 pl-1">
            <div class="card card-trans-4 pb-0 mb-0">
               <div class="card-header section_header p-2">
                  <i class="<?php echo e(config('icons.female')); ?>"></i>
                  <?php echo e(ucwords($stacie->title)); ?>

               </div>
               <div class="card-body text-light p-2">
                  <?php echo $stacie->body; ?>

               </div>
            </div>
         </div>
      <?php endif; ?>

   </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.UI.app-10', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/UI/about.blade.php ENDPATH**/ ?>