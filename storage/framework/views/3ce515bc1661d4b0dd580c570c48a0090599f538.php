<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-create')): ?>
   <a href="<?php echo e(route('admin.users.create')); ?>" class="btn btn-block btn-outline-success" title="Create User">
      <i class="<?php echo e(config('icons.add')); ?>"></i>
      Create User
   </a>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/users/actions/common/create.blade.php ENDPATH**/ ?>