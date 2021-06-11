
   <a href="<?php echo e(route('recipes.print', $recipe->id)); ?>"
      class="btn <?php echo e($size ? 'btn-'.$size : ''); ?> btn-maroon"
      title="Print Recipe">
      <i class="<?php echo e(config('icons.print')); ?>"></i>
      <div class="d-none d-lg-inline">
      	<?php echo e($btn_label ?? ''); ?>

      </div>
   </a>

<?php /**PATH C:\sites\l7\resources\views/UI/recipes/buttons/print.blade.php ENDPATH**/ ?>