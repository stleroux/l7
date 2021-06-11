<div class="row">

   <div class="col mb-2 text-center">

      <?php if($previous): ?>
         <a href="<?php echo e(route('projects.show', $previous)); ?>"
            class="btn btn-sm btn-secondary"
            title="Previous Project">
            <i class="<?php echo e(config('icons.previous')); ?>"></i>
            Previous Project
         </a>
      <?php endif; ?>

      <?php if($next): ?>
         <a href="<?php echo e(route('projects.show', $next)); ?>"
            class="btn btn-sm btn-secondary"
            title="Next Project">
            Next Project
            <i class="<?php echo e(config('icons.next')); ?>"></i>
         </a>
      <?php endif; ?>

   </div>

   <div class="col mb-2 float-right px-1">
      <?php echo $__env->make('common.likeTopbar', ['model' => $project], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   </div>

   <div class="d-flex mb-2">
      <div class="float-right">



         <?php if(url()->previous() == request()->root() . '/UI/search'): ?>
            <a href="#" class="btn btn-sm btn-secondary" onclick="history.back()">Search Results</a>
         <?php endif; ?>

         <a href="<?php echo e(route('projects.index')); ?>"
            class="btn btn-sm btn-secondary">
            <i class="<?php echo e(config('icons.back')); ?>"></i>
            Projects
         </a>
      </div>

   </div>
   
</div>
<?php /**PATH C:\sites\l7\resources\views/UI/projects/show/topbar.blade.php ENDPATH**/ ?>