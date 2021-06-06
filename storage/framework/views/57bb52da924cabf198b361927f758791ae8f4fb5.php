

<a href="<?php echo e(route('features.show', $feature)); ?>" class="btn btn-sm btn-default">
               <i class="<?php echo e(config('icons.view')); ?> text-primary"></i>
               View
            </a>
            
<?php if($feature->status == 'New'): ?>
   
            <a href="<?php echo e(route('features.edit', $feature)); ?>" class="btn btn-sm btn-default">
               <i class="<?php echo e(config('icons.edit')); ?> text-primary"></i>
               Edit
            </a>
         
            <a href="#"
               class="destroy-model btn btn-sm btn-default"
               data-toggle="modal"
               data-target="#destroyModal"
               data-id="<?php echo e($feature->id); ?>"
               data-url="<?php echo e(url('features', $feature->id)); ?>">
               <i class="<?php echo e(config('icons.trash')); ?> text-pink"></i>
               Trash
            </a>

           

<?php endif; ?><?php /**PATH C:\sites\l7\resources\views/UI/features/index/actions.blade.php ENDPATH**/ ?>