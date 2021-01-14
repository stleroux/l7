<div class="card card-trans-4 mb-2">
   <div class="card-header block_header p-2">
      <i class="far fa-star"></i>
      Most Popular Items
   </div>
   <div class="list-group px-1 text-light">
      
      
      <?php echo $__env->make('UI.projects.blocks.popular', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		
		<?php echo $__env->make('UI.recipes.blocks.popular', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		
		
   </div>
</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/UI/blocks/popularItems.blade.php ENDPATH**/ ?>