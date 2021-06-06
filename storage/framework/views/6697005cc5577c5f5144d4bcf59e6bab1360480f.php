
   <a href="<?php echo e(route('recipes.show', ($recipe->id ? $recipe->id : $archive->id))); ?>"
      class="btn <?php echo e($size ? 'btn-'.$size : ''); ?> btn-maroon"
      title="Show Recipe">
      <i class="<?php echo e(config('icons.show')); ?>"></i>
      <?php echo e($btn_label ?? ''); ?>

   </a>

<?php /**PATH C:\sites\l7\resources\views/UI/recipes/index/list/buttons/show.blade.php ENDPATH**/ ?>