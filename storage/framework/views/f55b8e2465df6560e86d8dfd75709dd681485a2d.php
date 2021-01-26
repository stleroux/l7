<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('bug-create')): ?>
   <a href="<?php echo e(route('admin.bugs.create')); ?>" class="btn btn-sm btn-block btn-outline-success mt-2" target="_blank" title="Create Bug">
      <i class="<?php echo e(config('icons.add')); ?>"></i>
      Report a Bug
   </a>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('feature-create')): ?>
   <a href="<?php echo e(route('admin.features.create')); ?>" class="btn btn-sm btn-block btn-outline-success" target="_blank" title="Request Feature">
      <i class="<?php echo e(config('icons.add')); ?>"></i>
      Request a Feature
   </a>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('post-create')): ?>
   <a href="<?php echo e(route('admin.posts.create')); ?>" class="btn btn-sm btn-block btn-outline-success" target="_blank" title="Create Post">
      <i class="<?php echo e(config('icons.add')); ?>"></i>
      Create Post
   </a>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('tag-create')): ?>
   <a href="<?php echo e(route('admin.tags.create')); ?>" class="btn btn-sm btn-block btn-outline-success" target="_blank" title="Create Tag">
      <i class="<?php echo e(config('icons.add')); ?>"></i>
      Create Tag
   </a>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('carving-create')): ?>
   <a href="<?php echo e(route('admin.carvings.create')); ?>" class="btn btn-sm btn-block btn-outline-success" target="_blank" title="Create Tag">
      <i class="<?php echo e(config('icons.add')); ?>"></i>
      Create Carving
   </a>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/layouts/admin/sidebars/right/popout.blade.php ENDPATH**/ ?>