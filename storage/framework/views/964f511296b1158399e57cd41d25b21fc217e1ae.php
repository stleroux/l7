<?php if(
      (Config::get('settings.carvings') == 'visible') || 
      (Config::get('settings.projects') == 'visible') ||
      (Config::get('settings.recipes') == 'visible') ||
      (Config::get('settings.blog') == 'visible')
   ): ?>

   <div class="card card-trans-4 mb-2">
      
      <div class="card-header block_header p-2">
         <i class="far fa-star"></i>
         Most Popular Items
      </div>

      <div class="list-group px-1 text-light">

         <?php if(Config::get('settings.carvings') == 'visible'): ?>
            <?php echo $__env->make('UI.carvings.blocks.popular', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php endif; ?>

         <?php if(Config::get('settings.projects') == 'visible'): ?>
            <?php echo $__env->make('UI.projects.blocks.popular', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php endif; ?>

         <?php if(Config::get('settings.recipes') == 'visible'): ?>
            <?php echo $__env->make('UI.recipes.blocks.popular', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php endif; ?>

         <?php if(Config::get('settings.blog') == 'visible'): ?>
            <?php echo $__env->make('UI.blog.blocks.popular', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php endif; ?>   		

      </div>
   </div>

<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/UI/blocks/popularItems.blade.php ENDPATH**/ ?>