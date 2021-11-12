<?php if($previous): ?>
   <a href="<?php echo e(route('recipes.show', $previous)); ?>"
      class="btn <?php echo e($size ? 'btn-'.$size : ''); ?> btn-maroon text-light col-2 col-xl-4"
      title="Previous Recipe">
      <i class="<?php echo e(config('icons.previous')); ?>"></i>
      
      <div class="d-none d-lg-inline col-xl-4">
      	<?php echo e($btn_label ?? ''); ?>

		</div>
   </a>
<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/UI/recipes/buttons/previousAll.blade.php ENDPATH**/ ?>