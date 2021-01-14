
   <a href="<?php echo e(route('recipes.printPDF', $recipe->id)); ?>"
      class="btn <?php echo e($size ? 'btn-'.$size : ''); ?> btn-maroon"
      title="Print Recipe to PDF">
      <i class="<?php echo e(config('icons.pdf')); ?>"></i>
      <div class="d-none d-lg-inline">
      	<?php echo e($btn_label ?? ''); ?>

      </div>
   </a>

<?php /**PATH /home/lerouxs/sites/l7/resources/views/UI/recipes/buttons/printPDF.blade.php ENDPATH**/ ?>