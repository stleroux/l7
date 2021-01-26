<?php if($previous): ?>
   <a href="<?php echo e(route('admin.recipes.show', $previous)); ?>"
      class="btn btn-block btn-default"
      title="Previous Recipe">
      <i class="<?php echo e(config('icons.previous')); ?>"></i>
      Previous
   </a>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/recipes/show/actions/previous.blade.php ENDPATH**/ ?>