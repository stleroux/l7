<div class="card mb-3 p-0 m-0">
   <div class="card-header block_header p-2 m-0">
      <i class="<?php echo e(config('buttons.archives')); ?>"></i>
      Movie Archives
   </div>
   <div class="card-body card_body p-0">
      <?php if(count($archivesLinks) > 0): ?>
         <ul class="list-group">
            <?php $__currentLoopData = $archivesLinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alink): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <a href="<?php echo e(route('admin.movies.archives', ['year'=>$alink->year, 'month'=>$alink->month])); ?>"
                  class="list-group-item list-group-item-action p-1">
                  <i class="<?php echo e(config('buttons.archive')); ?>"></i>
                  <?php echo e($alink->month_name); ?> - <?php echo e($alink->year); ?>

                  <span class="badge badge-secondary float-right">
                     <?php echo e($alink->archivesLinks_count); ?>

                  </span>
               </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </ul>
      <?php else: ?>
         <div class="text text-center">No Data Available</div>
      <?php endif; ?>
   </div>
</div>
<?php /**PATH C:\sites\l7\resources\views/admin/movies/blocks/archives.blade.php ENDPATH**/ ?>