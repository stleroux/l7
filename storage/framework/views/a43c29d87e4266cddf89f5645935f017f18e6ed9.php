<div class="row">

   <div class="col mb-2 text-center">

      <?php if($previous): ?>
         <a href="<?php echo e(route('carvings.show', $previous)); ?>"
            class="btn btn-sm btn-secondary"
            title="Previous Carving">
            <i class="<?php echo e(config('icons.previous')); ?>"></i>
            Previous Carving
         </a>
      <?php endif; ?>

      <?php if($next): ?>
         <a href="<?php echo e(route('carvings.show', $next)); ?>"
            class="btn btn-sm btn-secondary"
            title="Next Carving">
            Next Carving
            <i class="<?php echo e(config('icons.next')); ?>"></i>
         </a>
      <?php endif; ?>

   </div>

   <div class="col mb-2 float-right px-1">
      <?php echo $__env->make('common.likeTopbar', ['model' => $carving], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   </div>

   <div class="d-flex mb-2">
      <div class="float-right">
         



      <a href="<?php echo e(route('carvings.faq')); ?>"
         class="btn btn-sm btn-secondary">
         <i class="<?php echo e(config('icons.faq')); ?>"></i>
         FAQ
      </a>

      <?php if(url()->previous() == request()->root() . '/UI/search'): ?>
         <a href="#" class="btn btn-sm btn-secondary" onclick="history.back()">Search Results</a>
      <?php endif; ?>

      <?php if(Session::get('fromPage')): ?>
         <a href="<?php echo e(Session::get('fromPage')); ?>"
            class="btn btn-sm btn-secondary d-print-none"
            title="Back">
            <i class="<?php echo e(config('icons.back')); ?>"></i>
            <div class="d-none d-lg-inline">
               Carvings
               
            </div>
         </a>
      <?php else: ?>
         <a href="<?php echo e(route('carvings.index')); ?>"
            class="btn btn-sm btn-secondary">
            <i class="<?php echo e(config('icons.back')); ?>"></i>
            Carvings
         </a>
      <?php endif; ?>


      </div>

   </div>

   
</div>
<?php /**PATH C:\sites\l7\resources\views/UI/carvings/show/topbar.blade.php ENDPATH**/ ?>