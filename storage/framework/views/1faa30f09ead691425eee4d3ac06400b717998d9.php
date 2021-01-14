      <?php if(!$project->deleted_at): ?>
         <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('project-edit')): ?>
            <a href="<?php echo e(route('admin.projects.edit', $project)); ?>" class="btn btn-sm btn-default" title="Edit Project">
               <i class="<?php echo e(config('icons.edit')); ?> text-primary"></i>
               
            </a>
         <?php endif; ?>

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

         <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('project-delete')): ?>
            <button type="button"
               class="destroy-model btn btn-sm btn-default"
               data-toggle="modal"
               data-target="#destroyModal"
               data-id="<?php echo e($project->id); ?>"
               data-url="<?php echo e(url('admin/projects', $project->id)); ?>"
               title="Trash Project">
               <i class="<?php echo e(config('icons.trash')); ?> text-pink"></i>
               
            </button>
         <?php endif; ?>
      <?php endif; ?>

      <?php if($project->deleted_at): ?>
         <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('project-manage')): ?>
            <button type="button"
               class="restore-model btn btn-sm btn-default"
               data-toggle="modal"
               data-target="#restoreModal"
               data-id="<?php echo e($project->id); ?>"
               data-url="<?php echo e(url('admin/projects/restore', $project)); ?>"
               title="Restore Project">
               <i class="<?php echo e(config('icons.restore')); ?> text-primary"></i>
               
            </button>

            <!-- CANNOT use a link here, must use a button -->
            <button type="button"
               class="delete-model btn btn-sm btn-default"
               data-toggle="modal"
               data-target="#deleteModal"
               data-id="<?php echo e($project->id); ?>"
               data-url="<?php echo e(url('admin/projects/delete', $project->id)); ?>"
               title="Permanently Delete Project">
               <i class="<?php echo e(config('icons.delete')); ?> text-danger"></i>
               
            </button>
         <?php endif; ?>
      <?php endif; ?>

   </div>
</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/projects/index/actions.blade.php ENDPATH**/ ?>