<?php if(!$feature->deleted_at): ?>

   <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('feature-edit')): ?>
      <a href="<?php echo e(route('admin.features.edit', $feature)); ?>" class="btn btn-sm btn-default" title="Edit Fature">
         <i class="<?php echo e(config('icons.edit')); ?> text-primary"></i>
         
      </a>
   <?php endif; ?>

   <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('feature-delete')): ?>
      <a href="#"
         class="destroy-model btn btn-sm btn-default"
         data-toggle="modal"
         data-target="#destroyModal"
         data-id="<?php echo e($feature->id); ?>"
         data-url="<?php echo e(url('admin/features', $feature->id)); ?>"
         title="Trash Feature">
         <i class="<?php echo e(config('icons.trash')); ?> text-pink"></i>
         
      </a>
   <?php endif; ?>

<?php endif; ?>

<?php if($feature->deleted_at): ?>

   <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('feature-manage')): ?>

      <button type="button"
         class="restore-model btn btn-sm btn-default"
         data-toggle="modal"
         data-target="#restoreModal"
         data-id="<?php echo e($feature->id); ?>"
         data-url="<?php echo e(url('admin/features/restore', $feature)); ?>"
         title="Restore Feature">
         <i class="<?php echo e(config('icons.restore')); ?> text-primary"></i>
         
      </button>

      <!-- CANNOT use a link here, must use a button -->
      <button
         type="button"
         class="delete-model btn btn-sm btn-default"
         data-toggle="modal"
         data-target="#deleteModal"
         data-id="<?php echo e($feature->id); ?>"
         data-url="<?php echo e(url('admin/features/delete', $feature->id)); ?>"
         title="Permanently Delete Feature">
         <i class="<?php echo e(config('icons.delete')); ?> text-danger"></i>
         
      </button>
   
   <?php endif; ?>

<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/features/index/actions.blade.php ENDPATH**/ ?>