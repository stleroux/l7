<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('project-edit')): ?>
   <a href="<?php echo e(route('admin.projects.edit', $project)); ?>" class="btn btn-sm btn-default" title="Edit Project">
      <i class="<?php echo e(config('icons.edit')); ?> text-primary"></i>
   </a>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/projects/actions/grid/edit.blade.php ENDPATH**/ ?>