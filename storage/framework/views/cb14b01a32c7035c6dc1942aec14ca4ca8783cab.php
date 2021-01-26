<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('bug-create')): ?>
   <a href="<?php echo e(route('admin.bugs.create')); ?>" class="btn btn-block btn-outline-success" title="Create Bug">
      <i class="<?php echo e(config('icons.add')); ?>"></i>
      Report a Bug
   </a>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/bugs/actions/common/create.blade.php ENDPATH**/ ?>