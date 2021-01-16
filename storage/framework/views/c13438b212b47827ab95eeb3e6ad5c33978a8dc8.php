
      <?php if(!$finish->deleted_at): ?>
         <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('finish-edit')): ?>
            <a href="<?php echo e(route('admin.finishes.edit', $finish)); ?>" class="btn btn-sm btn-default" title="Edit Finish">
               <i class="<?php echo e(config('icons.edit')); ?> text-primary"></i>
               
            </a>
         <?php endif; ?>

         <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('finish-delete')): ?>
            <button type="button"
               class="destroy-model btn btn-sm btn-default"
               data-toggle="modal"
               data-target="#destroyModal"
               data-id="<?php echo e($finish->id); ?>"
               data-url="<?php echo e(url('admin/finishes', $finish)); ?>"
               title="Trash Finish"
               >
               <i class="<?php echo e(config('icons.trash')); ?> text-pink"></i>
               
            </button>
         <?php endif; ?>
      <?php endif; ?>

      <?php if($finish->deleted_at): ?>
         <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('finish-manage')): ?>
            

            <button type="button"
               class="restore-model btn btn-sm btn-default"
               data-toggle="modal"
               data-target="#restoreModal"
               data-id="<?php echo e($finish->id); ?>"
               data-url="<?php echo e(url('admin/finishes/restore', $finish)); ?>"
               title="Restore Project">
               <i class="<?php echo e(config('icons.restore')); ?> text-primary"></i>
               
            </button>

            <!-- CANNOT use a link here, must use a button -->
            <button type="button"
               class="delete-model btn btn-sm btn-default"
               data-toggle="modal"
               data-target="#deleteModal"
               data-id="<?php echo e($finish->id); ?>"
               data-url="<?php echo e(url('admin/finishes/delete', $finish)); ?>"
               title="Permanently Delete Finish"
               >
               <i class="<?php echo e(config('icons.delete')); ?> text-danger"></i>
               
            </button>
         <?php endif; ?>
      <?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/finishes/index/actions.blade.php ENDPATH**/ ?>