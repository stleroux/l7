

<?php $__env->startSection('stylesheet'); ?>
   <link rel="stylesheet" href="<?php echo e(asset('css/UI/woodbarn.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
   <i class="<?php echo e(config('icons.contact-us')); ?>"></i>
   Contact Us
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
   <li class="breadcrumb-item">Contact Us</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>



<div class="col-xl-8 offset-xl-2">
   
   <?php echo $__env->make('common.form_submission_error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   <div class="card card-trans-4">
      
      <div class="card-body">
         <form action="/contact" method="POST">   
            <?php echo csrf_field(); ?>
            <?php echo view('honeypot::honeypotFormFields'); ?>

            

 <?php if(request()->has('type') && (request()->type == "quoteRequest")): ?>
   <?php echo $__env->make('UI.contactForm.fields.cart.subject', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('UI.contactForm.fields.cart.email', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('UI.contactForm.fields.cart.items', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('UI.contactForm.fields.cart.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php else: ?>
   <?php echo $__env->make('UI.contactForm.fields.main.subject', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('UI.contactForm.fields.main.email', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('UI.contactForm.fields.main.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

            
            

            

            <div class="text-center">
               <input type="submit" value="Send Message" class="btn btn-sm btn-primary">
            </div>

         </form>
      </div>

      <div class="card-footer p-1">
         <?php echo Config::get('settings.formFieldsRequired'); ?>

      </div>

   </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.UI.app-10', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/UI/contactForm/create.blade.php ENDPATH**/ ?>