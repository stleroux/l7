

<?php $__env->startSection('stylesheet'); ?>
   <link rel="stylesheet" href="<?php echo e(asset('css/UI/woodbarn.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
   <i class="<?php echo e(config('icons.faq')); ?> mr-1"></i>
   Frequently Asked Questions
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
   <li class="breadcrumb-item"><a href="<?php echo e(route('homepage')); ?>">Home</a></li>
   <li class="breadcrumb-item">FAQ</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightColumn'); ?>
   
   
<?php $__env->stopSection(); ?>

<?php $__env->startSection('topbar'); ?>
   
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

   <div class="card mb-2 card-trans-0">
   
      <div class="card-header text-light p-2 m-0 bg-primary">
         <i class="<?php echo e(config('icons.faq')); ?>"></i>
         Click the question to reveal the answer.
      </div>
      
      <div class="card-body p-0 m-0">


         <div id="accordion">
            <?php $__empty_1 = true; $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

<?php if($faq->category == 'Carvings'): ?>
   <?php
      $bgColor = 'bg-primary';
      $style1 = '';
   ?>
<?php elseif($faq->category == 'Projects'): ?>
   <?php
      $bgColor = 'bg-info';
      $style1 = '';
   ?>
<?php else: ?> 
   <?php
      $bgColor = '';
      $style1 = "style=\"background-color: #800000\"";
   ?>
   
<?php endif; ?>


               <div class="card mb-2 mt-2 card-trans-8">
                  <div class="card-header p-0 m-0 <?php echo e($bgColor); ?>" id="heading<?php echo e($faq->id); ?>" <?php echo $style1; ?>>
                     <h6 class="mb-0 p-0">
                        <a href="#"
                           class="list-group-item p-1 m-0 card-trans-4 text-dark"
                            
                           data-toggle="collapse"
                           data-target="#collapse<?php echo e($faq->id); ?>"
                           aria-expanded="true"
                           aria-controls="collapse<?php echo e($faq->id); ?>">
                           <small>[<?php echo e($faq->category); ?>]</small> :: <?php echo e(ucwords($faq->question)); ?>

                        </a>
                     </h6>
                  </div>

                  <div id="collapse<?php echo e($faq->id); ?>" class="collapse <?php echo e($bgColor); ?>" <?php echo $style1; ?> aria-labelledby="heading<?php echo e($faq->id); ?>" data-parent="#accordion">
                     <div class="card-body p-2 m-0 card-trans-8 text-dark">
                        <?php echo ucfirst($faq->answer); ?>

                     </div>
                  </div>
               </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
               <div class="col-row p-2 card-trans-4">
                  <?php echo e(config('settings.noRecordsFound')); ?>

               </div>
            <?php endif; ?>
         </div>

      </div>
   </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.UI.app-10', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/UI/faqs.blade.php ENDPATH**/ ?>