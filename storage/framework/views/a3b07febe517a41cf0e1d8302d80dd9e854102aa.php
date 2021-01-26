<!-- RESTORE MODAL -->
<div class="modal bg-secondary" id="restoreModal" tabindex="-1" role="dialog">
   <div class="modal-dialog modal-dialog-centered" role="document"> <!-- modal-dialog-centered -->
      <div class="modal-content">
         <div class="modal-header bg-primary">
            <h5 class="modal-title" id="exampleModalLongTitle">
               <i class="<?php echo e(config('icons.')); ?>"></i>
               Restore <?php echo e(ucfirst($modelName)); ?>?
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>

         <form action="" method="POST" id="restoreForm">
            <?php echo csrf_field(); ?>
            

            <div class="modal-body text-dark">
               <p class="font-weight-bold">Are you sure you want to restore this <?php echo e(ucfirst($modelName)); ?>?</p>
               
            </div>
            
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
               <button type="submit" class="btn btn-primary">Restore <?php echo e(ucfirst($modelName)); ?></button>
            </div>
         </form>
      
      </div> <!-- modal content -->
   
   </div><!-- modal dialog -->

</div><!-- modal -->
<?php /**PATH /home/lerouxs/sites/l7/resources/views/modals/restore.blade.php ENDPATH**/ ?>