

<?php $__env->startSection('stylesheet'); ?>
   <link rel="stylesheet" href="<?php echo e(asset('css/UI/woodbarn.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
      Edit Bug Report
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
   <li class="breadcrumb-item"><a href="<?php echo e(route('bugs.index')); ?>">Bug Reports</a></li>
   <li class="breadcrumb-item">Edit Bug Report</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightColumn'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

   <form action="<?php echo e(route('bugs.update', $bug)); ?>" method="POST">
      <?php echo csrf_field(); ?>
      <?php echo method_field('PUT'); ?>

      <?php echo $__env->make('UI.bugs.edit.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <div class="row">

         <div class="col">

            <div class="card card-trans-4">

               <div class="card-header section_header">
                  <div class="card-title">Bug Information</div>
               </div>

               <?php echo $__env->make('common.form_submission_error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

               <div class="card-body p-2">
                  <div class="row">
                     <div class="col">
                        <?php echo $__env->make('UI.bugs.edit.title', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                     </div>
                     <div class="col">
                        <?php echo $__env->make('UI.bugs.edit.page_url', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                     </div>
                     
                  </div>
                  <div class="row">
                     <div class="col">
                        <?php echo $__env->make('UI.bugs.edit.description', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                     </div>
                  </div>
                  

               </div> <!-- Card body -->
            </div><!-- Card -->
         </div><!-- Col -->

      </div><!-- Row -->

   </form>

   <?php echo $__env->make('help.index', ['title'=>'Edit Bug Report', 'icon'=>'bugs', 'path'=>'UI.bugs.edit'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
   <!-- Bootstrap Switch -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.UI.app-8', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/UI/bugs/edit.blade.php ENDPATH**/ ?>