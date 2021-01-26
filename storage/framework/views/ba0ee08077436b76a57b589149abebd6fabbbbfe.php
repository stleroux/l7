


<?php if(!$user->deleted_at): ?>

   <a href="<?php echo e(route('profile.show', $user)); ?>" class="btn btn-sm btn-light border" title="Show Profile">
      <i class="<?php echo e(config('icons.show')); ?> text-primary"></i>
      
   </a>

   <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-edit')): ?>
      <a href="<?php echo e(route('admin.users.edit', $user)); ?>" class="btn btn-sm btn-light border" title="Edit User">
         <i class="<?php echo e(config('icons.edit')); ?> text-primary"></i>
         
      </a>
   <?php endif; ?>

   <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-edit')): ?>
      <?php if($user->account_status): ?>
         <a href="<?php echo e(route('admin.users.disable', $user)); ?>" class="btn btn-sm btn-light border" title="Disable User">
            <i class="<?php echo e(config('icons.disable')); ?> text-pink"></i>
            
         </a>
      <?php else: ?>
         <a href="<?php echo e(route('admin.users.approve', $user)); ?>" class="btn btn-sm btn-light border" title="Enable User">
            <i class="<?php echo e(config('icons.approve')); ?> text-primary"></i>
            
         </a>
      <?php endif; ?>
   <?php endif; ?>

   <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-delete')): ?>
      <button type="button"
         class="btn btn-sm btn-light border destroy-model"
         data-toggle="modal"
         data-target="#destroyModal"
         data-id="<?php echo e($user->id); ?>"
         data-url="<?php echo e(url('admin/users', $user)); ?>"
         title="Trash User">
         <i class="<?php echo e(config('icons.trash')); ?> text-pink"></i>
         
      </button>
   <?php endif; ?>
<?php endif; ?>

<?php if($user->deleted_at): ?>
   <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-manage')): ?>
      <button type="button"
         class="restore-model btn btn-sm btn-default"
         data-toggle="modal"
         data-target="#restoreModal"
         data-id="<?php echo e($user->id); ?>"
         data-url="<?php echo e(url('admin/users/restore', $user)); ?>"
         title="Restore User"
         >
         <i class="<?php echo e(config('icons.restore')); ?>"></i>
         
      </button>

      <button type="button"
         class="delete-model btn btn-sm btn-default"
         data-toggle="modal"
         data-target="#deleteModal"
         data-id="<?php echo e($user->id); ?>"
         data-url="<?php echo e(url('admin/users/delete', $user)); ?>"
         title="Permanently Delete User">
         <i class="<?php echo e(config('icons.delete')); ?> text-danger"></i>
         
      </button>
   <?php endif; ?>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/users/index/actions.blade.php ENDPATH**/ ?>