      
      <?php if(!$permission->deleted_at): ?>
         
         <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('permission-edit')): ?>
            
            <a href="<?php echo e(route('admin.permissions.edit', $permission)); ?>"
               class="btn btn-sm btn-default"
               title="Edit Permission"
            >
               <i class="<?php echo e(config('icons.edit')); ?> text-primary"></i>
               
            </a>

         <?php endif; ?>

         <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('permission-delete')): ?>

            <button type="button"
               class="destroy-model btn btn-sm btn-default"
               data-toggle="modal"
               data-target="#destroyModal"
               data-id="<?php echo e($permission->id); ?>"
               data-url="<?php echo e(url('admin/permissions', $permission)); ?>"
               title="Trash Permission"
               >
               <i class="<?php echo e(config('icons.trash')); ?> text-pink"></i>
               
            </button>

         <?php endif; ?>

      <?php endif; ?>

      <?php if($permission->deleted_at): ?>

         <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('permission-manage')): ?>

            

            <button type="button"
               class="restore-model btn btn-sm btn-default"
               data-toggle="modal"
               data-target="#restoreModal"
               data-id="<?php echo e($permission->id); ?>"
               data-url="<?php echo e(url('admin/permissions/restore', $permission)); ?>"
               title="Restore Permission"
               >
               <i class="<?php echo e(config('icons.restore')); ?>"></i>
               
            </button>

            <!-- CANNOT use a link here, must use a button -->
            <button
               type="button"
               class="delete-model btn btn-sm btn-default"
               data-toggle="modal"
               data-target="#deleteModal"
               data-id="<?php echo e($permission->id); ?>"
               data-url="<?php echo e(url('admin/permissions/delete', $permission)); ?>"
               title="Delete Permanently"
               >
               <i class="<?php echo e(config('icons.delete')); ?> text-danger"></i>
               
            </button>
         
         <?php endif; ?>

      <?php endif; ?>
   </div>

</div><?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/permissions/index/actions.blade.php ENDPATH**/ ?>