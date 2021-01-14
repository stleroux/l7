<?php $__env->startSection('stylesheet'); ?>
   <link rel="stylesheet" href="<?php echo e(asset('css/UI/carvings.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
   <i class="<?php echo e(config('icons.carvings')); ?> mr-1"></i>
   Carvings :: Frequently Asked Questions
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
   <li class="breadcrumb-item"><a href="<?php echo e(route('carvings.index')); ?>">Carvings</a></li>
   <li class="breadcrumb-item">Carvings FAQ</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightColumn'); ?>
   <?php echo $__env->make('UI.carvings.blocks.popular', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   
<?php $__env->stopSection(); ?>

<?php $__env->startSection('topbar'); ?>
   
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

   <div class="accordion" id="carvingsFAQ">
      <div class="card text-dark">

         <?php $__empty_1 = true; $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>


            <a href="#"
               class="bg-primary list-group-item list-group-item-action p-1 mb-2"
               data-toggle="collapse"
               data-target="#collapse<?php echo e($faq->id); ?>"
               aria-expanded="true"
               aria-controls="collapse<?php echo e($faq->id); ?>">
               <?php echo e(ucwords($faq->question)); ?>

            </a>
            
            <div
               id="collapse<?php echo e($faq->id); ?>"
               class="collapse bg-light p-0 m-0"
               aria-labelledby="heading<?php echo e($faq->id); ?>"
               data-parent="#carvingsFAQ">
               <div class="card-body text-dark p-2 m-2 border">
                 <?php echo ucfirst($faq->answer); ?>

               </div>
            </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <?php endif; ?>

      </div>

   </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.UI.app-10-2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lerouxs/sites/l7/resources/views/UI/carvings/faqs.blade.php ENDPATH**/ ?>