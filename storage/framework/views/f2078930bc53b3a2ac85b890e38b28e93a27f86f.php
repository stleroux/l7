
   <div class="col-md-12">
      <div class="card card-trans-6 mb-2">
         <div class="card-header card_header p-2">Author's Notes</div>
         <div class="card-body card_body p-1 text-dark">
            <?php if($recipe->public_notes): ?> 
               <?php echo $recipe->public_notes; ?>

            <?php else: ?>
               N/A
            <?php endif; ?>
         </div>
      </div>
   </div>
<?php /**PATH C:\sites\l7\resources\views/UI/recipes/show/public_notes.blade.php ENDPATH**/ ?>