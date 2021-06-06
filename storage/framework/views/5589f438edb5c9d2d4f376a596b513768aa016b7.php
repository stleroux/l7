<div class="card-header d-none d-xl-block pt-0 pb-2 text-center">
   <div class="btn-group" role="group">
   <?php $__currentLoopData = $carving->categoriesOptions(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoryOptionKey => $categoryOptionValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php if($categoryOptionKey == 'select'): ?>
         <a href="<?php echo e(route('carvings.index')); ?>"
            class="btn btn-sm btn-<?php echo e((request()->is('carvings/all/*') || request()->is('carvings')) ? 'dark' : 'alphabet'); ?>">
            All Carvings
         </a>
      <?php else: ?>
         <a href="<?php echo e(route('carvings.index', $categoryOptionKey)); ?>"
            class="btn btn-sm btn-<?php echo e(request()->is('carvings/'.$categoryOptionKey.'*') ? 'dark' : 'alphabet'); ?> p-1">
            <?php echo e($categoryOptionValue); ?>

            
         </a>
      <?php endif; ?>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </div>
</div>


<div class="card-header d-block d-xl-none pt-0 pb-3 text-center">
   <select name="filter" class="form-control" onchange="if (this.value) window.location.href=this.value">
      <?php $__currentLoopData = $carving->categoriesOptions(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoryOptionKey => $categoryOptionValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <option value="<?php echo e(route('carvings.index', $categoryOptionKey)); ?>" <?php echo e(Request()->filter == $categoryOptionKey ? ' selected' : ''); ?>>
            <?php if($categoryOptionValue == 'Select One'): ?>
               All Carvings
            <?php else: ?>
               <?php echo e($categoryOptionValue); ?>

            <?php endif; ?>
         </option>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </select>
</div>
<?php /**PATH C:\sites\l7\resources\views/UI/carvings/index/topbar.blade.php ENDPATH**/ ?>