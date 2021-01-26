<?php if($next): ?>
   <a href="<?php echo e(route('admin.recipes.show', $next)); ?>"
      class="btn btn-block btn-default"
      title="Next Recipe">
      <i class="<?php echo e(config('icons.next')); ?>"></i>
      Next
   </a>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/recipes/show/actions/next.blade.php ENDPATH**/ ?>