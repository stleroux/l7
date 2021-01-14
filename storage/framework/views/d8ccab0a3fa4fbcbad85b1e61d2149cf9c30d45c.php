<div class="card-header d-none d-xl-block pt-0 pb-2 text-center">
   <div class="btn-group" role="group">
   <?php $__currentLoopData = $project->categoriesOptions(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoryOptionKey => $categoryOptionValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php if($categoryOptionKey == 0): ?>
         <a href="<?php echo e(route('projects.index')); ?>"
            class="btn btn-sm btn-<?php echo e(request()->is('projects') ? 'default' : 'alphabet'); ?>">
            All Projects
         </a>
      <?php else: ?>
         <a href="<?php echo e(route('projects.index', $categoryOptionKey)); ?>"
            class="btn btn-sm btn-<?php echo e(request()->is('projects/'.$categoryOptionKey) ? 'default' : 'alphabet'); ?> p-1">
            <?php echo e($categoryOptionValue); ?>

         </a>
      <?php endif; ?>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </div>
</div>


<div class="card-header d-block d-xl-none pt-0 pb-3 text-center">
   <select name="filter" class="form-control" onchange="if (this.value) window.location.href=this.value">
      <?php $__currentLoopData = $project->categoriesOptions(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoryOptionKey => $categoryOptionValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <option value="<?php echo e(route('projects.index', $categoryOptionKey)); ?>" <?php echo e(Request()->filter == $categoryOptionKey ? ' selected' : ''); ?>>
            <?php if($categoryOptionValue == 'Select One'): ?>
               All Projects
            <?php else: ?>
               <?php echo e($categoryOptionValue); ?>

            <?php endif; ?>
         </option>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </select>
</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/UI/projects/index/topbar.blade.php ENDPATH**/ ?>