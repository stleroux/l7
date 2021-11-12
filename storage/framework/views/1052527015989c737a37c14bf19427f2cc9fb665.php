
   <div class="col-md-3">
      <div class="card card-secondary mb-2">
         <div class="card-header p-1">Publish(ed) On</div>
         <div class="card-body p-1 text-center">
            <?php if($recipe->published_at): ?>
               <?php echo e($recipe->published_at->diffForHumans()); ?>

            <?php else: ?>
               N/A
            <?php endif; ?>
         </div>
      </div>
   </div>
<?php /**PATH C:\sites\l7\resources\views/admin/recipes/show/fields/publishDate.blade.php ENDPATH**/ ?>