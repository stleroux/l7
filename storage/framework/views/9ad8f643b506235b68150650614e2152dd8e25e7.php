<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('recipe-create')): ?>
   <a href="<?php echo e(route('admin.recipes.create')); ?>" class="btn btn-block btn-outline-success" title="Create Recipe">
      <i class="<?php echo e(config('icons.add')); ?>"></i>
      Create Recipe
   </a>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/recipes/actions/common/create.blade.php ENDPATH**/ ?>