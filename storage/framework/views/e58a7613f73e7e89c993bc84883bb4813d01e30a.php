<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('recipe-create')): ?>
   <a href="<?php echo e(route('admin.recipes.create')); ?>" class="btn btn-block btn-outline-success">
      <i class="<?php echo e(config('icons.add')); ?>"></i>
      <div class="d-none d-lg-inline">
         Create Recipe
      </div>
   </a>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/recipes/index/sections/functions/actions/create.blade.php ENDPATH**/ ?>