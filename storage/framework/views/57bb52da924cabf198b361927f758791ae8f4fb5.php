<div class="row float-right">

   <?php if($feature->status != "Rejected" && $feature->status != "Implemented"): ?>

      <?php if($feature->user_id != Auth::id()): ?>
         <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('like', $feature)): ?>
            <form class="pr-1" action="<?php echo e(route('like')); ?>" method="POST">
               <?php echo csrf_field(); ?>
               <input type="hidden" name="likeable_type" value="<?php echo e(get_class($feature)); ?>"/>
               <input type="hidden" name="id" value="<?php echo e($feature->id); ?>"/>
               <button class="btn btn-block btn-sm btn-success text-dark font-weight-bold"><?php echo app('translator')->get('Like'); ?></button>
            </form>
         <?php else: ?>
            <form class="pr-1" action="<?php echo e(route('unlike')); ?>" method="POST">
               <?php echo csrf_field(); ?>
               <?php echo method_field('DELETE'); ?>
               <input type="hidden" name="likeable_type" value="<?php echo e(get_class($feature)); ?>"/>
               <input type="hidden" name="id" value="<?php echo e($feature->id); ?>"/>
               <button class="btn btn-block btn-sm btn-danger text-dark"><strong><?php echo app('translator')->get('Unlike'); ?></strong></button>
            </form>
         <?php endif; ?>
      <?php endif; ?>

   <?php endif; ?>

   <?php if($feature->status == 'New' || $feature->status == 'Pending'): ?>
      <?php if($feature->user_id == Auth::id()): ?>
         <a href="#"
            class="destroy-model btn btn-sm btn-default mr-1"
            data-toggle="modal"
            data-target="#destroyModal"
            data-id="<?php echo e($feature->id); ?>"
            data-url="<?php echo e(url('features', $feature->id)); ?>">
            <i class="<?php echo e(config('icons.trash')); ?> text-pink"></i>
            Trash
         </a>

         <a href="<?php echo e(route('features.edit', $feature)); ?>" class="btn btn-sm btn-default mr-1">
            <i class="<?php echo e(config('icons.edit')); ?> text-primary"></i>
            Edit
         </a>
      <?php endif; ?>
   <?php endif; ?>
   
   <a href="<?php echo e(route('features.show', $feature)); ?>" class="btn btn-sm btn-default mr-1">
      <i class="<?php echo e(config('icons.view')); ?> text-primary"></i>
      View
   </a>

</div>
<?php /**PATH C:\sites\l7\resources\views/UI/features/index/actions.blade.php ENDPATH**/ ?>