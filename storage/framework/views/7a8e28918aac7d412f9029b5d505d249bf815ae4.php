<!-- TAGS -->
<div class="card card-trans-4 card-outline card-info text-dark mb-2">

   <div class="card-header bg-primary p-1">
      <div class="card-title">
         Related Tags
      </div>
   </div>

   <?php if($carving->tags->count() > 0): ?>
      <div class="card-body p-1">
         <?php $__currentLoopData = $carving->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <span class="lead">
               <span class="badge badge-light font-weight-normal">
                  
                  
                  <?php echo e($tag->name); ?>

               </span>
            </span>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>               
      </div>            
   <?php else: ?>
      <div class="card-body p-1">N/A</div>
   <?php endif; ?>

</div>
<?php /**PATH C:\sites\l7\resources\views/UI/carvings/show/tags.blade.php ENDPATH**/ ?>