<?php if($previous): ?>
   <a href="<?php echo e(route('admin.recipes.show', $previous)); ?>"
      class="btn btn-block btn-outline-secondary"
      title="Previous Recipe">
      <i class="<?php echo e(config('icons.previous')); ?>"></i>
      Previous Recipe
   </a>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/recipes/actions/common/previous.blade.php ENDPATH**/ ?>