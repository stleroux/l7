<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('project-edit')): ?>
   <a href="<?php echo e(route('admin.projects.edit', $project)); ?>" class="btn btn-block btn-outline-primary">
      <i class="<?php echo e(config('icons.edit')); ?>"></i>
      Edit
   </a>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/projects/actions/common/edit.blade.php ENDPATH**/ ?>