




      <?php if(!$role->deleted_at): ?>

         <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-edit')): ?>
            <a href="<?php echo e(route('admin.roles.edit', $role)); ?>" class="btn btn-sm btn-default" title="Edit Role">
               <i class="<?php echo e(config('icons.edit')); ?> text-primary"></i>
               
            </a>
         <?php endif; ?>

         <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-manage')): ?>
            <a href="<?php echo e(route('admin.roles.addAllPerms', $role)); ?>" class="btn btn-sm btn-default" title="Add All Permissions">
               <i class="<?php echo e(config('icons.permissions')); ?> text-primary"></i>
               
            </a>

            <a href="<?php echo e(route('admin.roles.removeAllPerms', $role)); ?>" class="btn btn-sm btn-default" title="Remove All Permissions">
               <i class="<?php echo e(config('icons.permissions')); ?> text-danger"></i>
               
            </a>
         <?php endif; ?>

         <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-delete')): ?>
            <a href="#"
               class="destroy-model btn btn-sm btn-default"
               data-toggle="modal"
               data-target="#destroyModal"
               data-id="<?php echo e($role->id); ?>"
               data-url="<?php echo e(url('admin/roles', $role)); ?>"
               title="Trash Role">
               <i class="<?php echo e(config('icons.trash')); ?> text-pink"></i>
               
            </a>
         <?php endif; ?>

      <?php endif; ?>

      <?php if($role->deleted_at): ?>

         <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-manage')): ?>

            

            

            <button type="button"
               class="restore-model btn btn-sm btn-default"
               data-toggle="modal"
               data-target="#restoreModal"
               data-id="<?php echo e($role->id); ?>"
               data-url="<?php echo e(url('admin/roles/restore', $role)); ?>"
               title="Restore Role"
               >
               <i class="<?php echo e(config('icons.restore')); ?>"></i>
               
            </button>
            
            <!-- CANNOT use a link here, must use a button -->
            <button
               type="button"
               class="delete-model btn btn-sm btn-default"
               data-toggle="modal"
               data-target="#deleteModal"
               data-id="<?php echo e($role->id); ?>"
               data-url="<?php echo e(url('admin/roles/delete', $role)); ?>"
               title="Permanently Delete Role">
               <i class="<?php echo e(config('icons.delete')); ?> text-danger"></i>
               
            </button>
         
         <?php endif; ?>

      <?php endif; ?><?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/roles/index/actions.blade.php ENDPATH**/ ?>