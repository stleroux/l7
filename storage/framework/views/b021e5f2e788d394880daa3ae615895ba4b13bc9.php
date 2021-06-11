
   <div class="col-md-3">
      <div class="card card-trans-6 mb-2">
         <div class="card-header card_header p-2">Publish(ed) On</div>
         <div class="card-body p-1 text-center text-dark">
            <?php if($recipe->published_at): ?>
               <?php echo e($recipe->published_at->diffForHumans()); ?>

            <?php else: ?>
               N/A
            <?php endif; ?>
         </div>
      </div>
   </div>
<?php /**PATH C:\sites\l7\resources\views/UI/recipes/show/publishDate.blade.php ENDPATH**/ ?>