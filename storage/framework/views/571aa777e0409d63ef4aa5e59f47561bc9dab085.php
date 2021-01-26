<?php if($next): ?>
   <a href="<?php echo e(route('admin.recipes.show', $next)); ?>"
      class="btn btn-block btn-outline-secondary"
      title="Next Recipe">
      Next Recipe
      <i class="<?php echo e(config('icons.next')); ?>"></i>
   </a>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/recipes/actions/common/next.blade.php ENDPATH**/ ?>