<div class="text-center">
   <div class="btn-group" role="group">
      <?php if(Request::route('cat') == 'all'): ?>
         <a href="<?php echo e(route('recipes.indexGrid', 'all')); ?>"
            class="<?php echo e(Request::is('recipes/indexGrid/all') ? "btn-default": "btn-maroon"); ?> btn btn-sm">
            All
         </a>
         <?php $__currentLoopData = $letters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route('recipes.indexGrid', ['all', $value])); ?>"
               class="<?php echo e(Request::is('recipes/indexGrid/all/' . $value) ? "btn-default": "btn-maroon"); ?> btn btn-sm">
               <?php echo e(strtoupper($value)); ?>

            </a>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php else: ?>
         <a href="<?php echo e(route('recipes.indexGrid', Request::route('cat'))); ?>"
            class="<?php echo e(Request::is('recipes/indexGrid/' . Request::route('cat'), Request::route('key')) ? "btn-default": "btn-maroon"); ?> btn btn-sm">
            All
         </a>
         <?php $__currentLoopData = $letters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route('recipes.indexGrid', [Request::route('cat'), $value])); ?>"
               class="<?php echo e(Request::is('recipes/indexGrid/' . Request::route('cat') . '/' . $value) ? "btn-default": "btn-maroon"); ?> btn btn-sm">
               <?php echo e(strtoupper($value)); ?>

            </a>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php endif; ?>
   </div>
</div>
<?php /**PATH C:\sites\l7\resources\views/UI/recipes/index/grid/alphabet.blade.php ENDPATH**/ ?>