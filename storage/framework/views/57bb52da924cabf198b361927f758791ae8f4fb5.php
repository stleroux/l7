


<div class="row float-right">

   <?php if($feature->status != "Rejected" && $feature->status != "Implemented"): ?>
      <?php echo $__env->make('common.likeGrid', ['model'=>$feature], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php endif; ?>

   <div class="pr-1">
      <a href="<?php echo e(route('features.show', $feature)); ?>" class="btn btn-sm btn-default">
         <i class="<?php echo e(config('icons.view')); ?> text-primary"></i>
         View
      </a>      
   </div>
               
   <?php if($feature->status == 'New'): ?>
      <div class="pr-1">
         <a href="<?php echo e(route('features.edit', $feature)); ?>" class="btn btn-sm btn-default pl-2">
            <i class="<?php echo e(config('icons.edit')); ?> text-primary"></i>
            Edit
         </a>
      </div>

      <div class="pr-1">
         <a href="#"
            class="destroy-model btn btn-sm btn-default pl-2"
            data-toggle="modal"
            data-target="#destroyModal"
            data-id="<?php echo e($feature->id); ?>"
            data-url="<?php echo e(url('features', $feature->id)); ?>">
            <i class="<?php echo e(config('icons.trash')); ?> text-pink"></i>
            Trash
         </a>
      </div>
   <?php endif; ?>
</div>


<?php /**PATH C:\sites\l7\resources\views/UI/features/index/actions.blade.php ENDPATH**/ ?>