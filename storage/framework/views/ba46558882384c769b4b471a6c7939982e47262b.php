
   <div class="col-md-12">
      <div class="card card-secondary mb-2">
         <div class="card-header p-1">Author's Notes</div>
         <div class="card-body p-1 text-dark">
            <?php if($recipe->public_notes): ?> 
               <?php echo $recipe->public_notes; ?>

            <?php else: ?>
               N/A
            <?php endif; ?>
         </div>
      </div>
   </div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/recipes/show/public_notes.blade.php ENDPATH**/ ?>