<!-- MASS DELETE MODAL -->

<?php
   $modelNamePlural = Illuminate\Support\Str::plural($modelName);
   $action = $modelNamePlural;
   $fullName = ucfirst($modelNamePlural);
?>

<div class="modal bg-secondary" tabindex="-1" role="dialog" id="massDelete-modal">
   
   <div class="modal-dialog modal-dialog-centered" role="document">
      
      <div class="modal-content">
         
         <div class="modal-header bg-danger">
            <h5 class="modal-title">
               <i class="<?php echo e(config('icons.')); ?>"></i>
               Delete Multiple <?php echo e($fullName); ?>

            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>

         <form action="<?php echo e(route('admin.'. $action .'.mass_delete')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>

            <div class="modal-body text-dark">
               <p>Are you sure you want to PERMANENTLY delete the selected <?php echo e($modelNamePlural); ?>?</p>
               <p class="small font-weight-bold text-danger">This action CANNOT be reverted.</p>
            </div>

            <div class="modal-footer align-items-start">
               <input name="mass_delete_pass_checkedvalue" type="hidden" value="mass_delete_pass_checkedvalue" id="mass_delete_hidden_checkedinput">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
               <button type="submit" class="btn btn-danger">Delete <?php echo e($fullName); ?></button>
            </form>

         </div><!-- Modal Footer -->

      </div><!-- Modal Content-->

   </div><!-- Modal Dialog-->

</div><!-- Modal -->
<?php /**PATH /home/lerouxs/sites/l7/resources/views/modals/massDelete.blade.php ENDPATH**/ ?>