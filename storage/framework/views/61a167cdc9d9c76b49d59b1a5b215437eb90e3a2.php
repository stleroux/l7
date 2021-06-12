<div class="row">

   <div class="col mb-2 text-center">

   
   


   </div>

<?php if($feature->status != "Rejected" && $feature->status != "Implemented"): ?>
   <div class="col mb-2 float-right px-1">
      <?php echo $__env->make('common.likeTopbar', ['model' => $feature], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   </div>
<?php endif; ?>

   <div class="d-flex mb-2">

      <div class="float-right">

         <a href="<?php echo e(route('features.index')); ?>"
            class="btn btn-sm btn-light border">
            <i class="<?php echo e(config('icons.back')); ?>"></i>
            <div class="d-none d-lg-inline">
               Cancel
            </div>
         </a>

         <a href="#" class="btn btn-sm btn-light border" data-toggle="modal" data-target="#helpModal">
            <i class="<?php echo e(config('icons.help')); ?>"></i>
            <div class="d-none d-lg-inline">
               Help
            </div>
         </a>

      </div>

   </div>

</div>
<?php /**PATH C:\sites\l7\resources\views/UI/features/show/topbar.blade.php ENDPATH**/ ?>