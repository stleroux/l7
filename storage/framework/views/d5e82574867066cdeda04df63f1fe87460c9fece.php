

<?php $__env->startSection('stylesheet'); ?>
   <link rel="stylesheet" href="<?php echo e(asset('css/UI/woodbarn.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
   <i class="<?php echo e(config('icons.features')); ?>"></i>
   Edit Requested Feature
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
   <li class="breadcrumb-item"><a href="<?php echo e(route('features.index')); ?>">Requested Features</a></li>
   <li class="breadcrumb-item">Edit Requested Feature</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightColumn'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

   <form action="<?php echo e(route('features.update', $feature)); ?>" method="POST">
      <?php echo csrf_field(); ?>
      <?php echo method_field('PUT'); ?>

      <?php echo $__env->make('UI.features.edit.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('common.form_submission_error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('UI.features.forms.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   </form>
   
   <?php echo $__env->make('help.index', ['title'=>'Edit Requested Feature', 'icon'=>'features', 'path'=>'UI.features.edit'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.UI.app-8', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/UI/features/edit.blade.php ENDPATH**/ ?>