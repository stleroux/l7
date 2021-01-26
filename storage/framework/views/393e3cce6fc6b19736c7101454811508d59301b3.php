<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('project-delete')): ?>
   <a href="#"
      class="destroy-model btn btn-sm btn-default"
      data-toggle="modal"
      data-target="#destroyModal"
      data-id="<?php echo e($project->id); ?>"
      data-url="<?php echo e(url('admin/projects', $project->id)); ?>"
      title="Trash Project">
      <i class="<?php echo e(config('icons.trash')); ?> text-pink"></i>
   </a>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/projects/actions/grid/destroy.blade.php ENDPATH**/ ?>