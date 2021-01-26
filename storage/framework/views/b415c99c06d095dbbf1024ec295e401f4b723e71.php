<?php if($recipe->user_id == Auth::id() || Auth::user()->can('recipe-edit')): ?>
   <a href="<?php echo e(route('admin.recipes.edit', $recipe->id)); ?>"
      class="btn btn-block btn-outline-primary"
      title="Edit Recipe">
      <i class="<?php echo e(config('icons.edit')); ?>"></i>
      Edit Recipe
   </a>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/recipes/actions/common/edit.blade.php ENDPATH**/ ?>