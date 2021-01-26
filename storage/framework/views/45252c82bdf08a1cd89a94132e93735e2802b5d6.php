<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-create')): ?>
   <a href="<?php echo e(route('admin.roles.create')); ?>" class="btn btn-block btn-outline-success" title="Create Role">
      <i class="<?php echo e(config('icons.add')); ?>"></i>
      Create Role
   </a>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/roles/actions/common/create.blade.php ENDPATH**/ ?>