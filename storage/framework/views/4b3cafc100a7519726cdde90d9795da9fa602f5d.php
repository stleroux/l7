      <?php if(!$carving->deleted_at): ?>
         <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('carving-edit')): ?>
            <a href="<?php echo e(route('admin.carvings.edit', $carving)); ?>" class="btn btn-sm btn-default" title="Edit carving">
               <i class="<?php echo e(config('icons.edit')); ?> text-primary"></i>
               
            </a>
         <?php endif; ?>

         <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('carving-manage')): ?>
            <button type="button"
               class="resetViews-model btn btn-sm btn-default"
               data-toggle="modal"
               data-target="#resetViewsModal"
               data-id="<?php echo e($carving->id); ?>"
               data-url="<?php echo e(url('admin/carvings/resetViews', $carving)); ?>"
               title="Reset Carving Views"
               >
               <i class="<?php echo e(config('icons.resetViews')); ?> text-secondary"></i>
               
            </button>
         <?php endif; ?>

         <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('carving-delete')): ?>
            <button type="button"
               class="destroy-model btn btn-sm btn-default"
               data-toggle="modal"
               data-target="#destroyModal"
               data-id="<?php echo e($carving->id); ?>"
               data-url="<?php echo e(url('admin/carvings', $carving->id)); ?>"
               title="Trash Carving">
               <i class="<?php echo e(config('icons.trash')); ?> text-pink"></i>
               
            </button>
         <?php endif; ?>
      <?php endif; ?>

      <?php if($carving->deleted_at): ?>
         <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('carving-manage')): ?>
            <button type="button"
               class="restore-model btn btn-sm btn-default"
               data-toggle="modal"
               data-target="#restoreModal"
               data-id="<?php echo e($carving->id); ?>"
               data-url="<?php echo e(url('admin/carvings/restore', $carving)); ?>"
               title="Restore Carving">
               <i class="<?php echo e(config('icons.restore')); ?> text-primary"></i>
               
            </button>

            <!-- CANNOT use a link here, must use a button -->
            <button type="button"
               class="delete-model btn btn-sm btn-default"
               data-toggle="modal"
               data-target="#deleteModal"
               data-id="<?php echo e($carving->id); ?>"
               data-url="<?php echo e(url('admin/carvings/delete', $carving->id)); ?>"
               title="Permanently Delete Carving">
               <i class="<?php echo e(config('icons.delete')); ?> text-danger"></i>
               
            </button>
         <?php endif; ?>
      <?php endif; ?>

   </div>
</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/carvings/index/actions.blade.php ENDPATH**/ ?>