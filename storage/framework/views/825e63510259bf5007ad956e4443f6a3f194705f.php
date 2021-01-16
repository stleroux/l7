
      <?php if(!$material->deleted_at): ?>
         <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('material-edit')): ?>
            <a href="<?php echo e(route('admin.materials.edit', $material)); ?>" class="btn btn-sm btn-default" title="Edit Material">
               <i class="<?php echo e(config('icons.edit')); ?> text-primary"></i>
               
            </a>
         <?php endif; ?>

         <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('material-delete')): ?>
            <button type="button"
               class="destroy-model btn btn-sm btn-default"
               data-toggle="modal"
               data-target="#destroyModal"
               data-id="<?php echo e($material->id); ?>"
               data-url="<?php echo e(url('admin/materials', $material)); ?>"
               title="Trash Material"
               >
               <i class="<?php echo e(config('icons.trash')); ?> text-pink"></i>
               
            </button>
         <?php endif; ?>
      <?php endif; ?>

      <?php if($material->deleted_at): ?>
         <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('material-manage')): ?>

            <button type="button"
               class="restore-model btn btn-sm btn-default"
               data-toggle="modal"
               data-target="#restoreModal"
               data-id="<?php echo e($material->id); ?>"
               data-url="<?php echo e(url('admin/materials/restore', $material)); ?>"
               title="Restore Project">
               <i class="<?php echo e(config('icons.restore')); ?> text-primary"></i>
               
            </button>

            <!-- CANNOT use a link here, must use a button -->
            <button type="button"
               class="delete-model btn btn-sm btn-default"
               data-toggle="modal"
               data-target="#deleteModal"
               data-id="<?php echo e($material->id); ?>"
               data-url="<?php echo e(url('admin/materials/delete', $material)); ?>"
               title="Permanently Delete Material"
               >
               <i class="<?php echo e(config('icons.delete')); ?> text-danger"></i>
               
            </button>
         <?php endif; ?>
      <?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/materials/index/actions.blade.php ENDPATH**/ ?>