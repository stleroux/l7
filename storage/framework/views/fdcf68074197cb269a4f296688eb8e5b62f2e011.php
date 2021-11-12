<div class="card mb-2">

   <div class="card-header bg-primary p-2">
      
      Tags
   </div>
   
   <div class="card-body card-trans-6 p-1 m-0">
      <a href="<?php echo e(route('admin.carvings.index')); ?>"
         class="btn btn-xs btn-block btn-<?php echo e(!request('tag') ? 'dark' : 'secondary'); ?>">
         All Carvings
      </a>

      <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <a href="<?php echo e(route('admin.carvings.index', ['tag'=>$t->name])); ?>"
            class="btn btn-xs btn-<?php echo e((request('tag') == $t->name) ? 'dark' : 'secondary'); ?> mt-1">
            <?php echo e(ucwords($t->name)); ?>

         </a>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   
   </div>

</div>
<?php /**PATH C:\sites\l7\resources\views/admin/carvings/blocks/tags.blade.php ENDPATH**/ ?>