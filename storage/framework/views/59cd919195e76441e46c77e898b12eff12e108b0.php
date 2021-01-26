<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('project-manage')): ?>
   <button type="button"
      class="resetViews-model btn btn-sm btn-default"
      data-toggle="modal"
      data-target="#resetViewsModal"
      data-id="<?php echo e($project->id); ?>"
      data-url="<?php echo e(url('admin/projects/resetViews', $project)); ?>"
      title="Reset Project Views"
      >
      <i class="<?php echo e(config('icons.resetViews')); ?> text-secondary"></i>
      
   </button>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/projects/actions/grid/resetViews.blade.php ENDPATH**/ ?>