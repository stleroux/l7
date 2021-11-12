<!-- DELETE MODAL -->
<div class="modal bg-secondary" id="deleteModal" tabindex="-1" role="dialog">
   <div class="modal-dialog modal-dialog-centered" role="document"> <!-- modal-dialog-centered -->
      <div class="modal-content">
         <div class="modal-header bg-danger">
            <h5 class="modal-title" id="exampleModalLongTitle">
               <i class="<?php echo e(config('icons.')); ?>"></i>
               PERMANENTLY Delete <?php echo e(ucfirst($modelName)); ?>?
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>

         <form action="" method="post" id="deleteForm">
            <?php echo csrf_field(); ?>

            <div class="modal-body text-dark">
               <p class="font-weight-bold">Are you sure you want to PERMANENTLY delete this <?php echo e(ucfirst($modelName)); ?>?</p>
               <p class="small font-weight-bold text-danger">This action CANNOT be reverted.</p>
            </div>
            
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
               <button type="submit" class="btn btn-danger">Delete <?php echo e(ucfirst($modelName)); ?></button>
            </div>
         </form>
      
      </div> <!-- modal content -->
   
   </div><!-- modal dialog -->

</div><!-- modal -->
<?php /**PATH C:\sites\l7\resources\views/modals/delete.blade.php ENDPATH**/ ?>