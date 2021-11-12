<!-- MASS DESTROY MODAL -->


<?php
   $modelNamePlural = Illuminate\Support\Str::plural($modelName);
   $action = $modelNamePlural;
   $fullName = ucfirst($modelNamePlural);
?>

<div class="modal bg-secondary" tabindex="-1" role="dialog" id="massDestroy-modal">
   
   <div class="modal-dialog modal-dialog-centered" role="document">
      
      <div class="modal-content">
         
         <div class="modal-header bg-pink">
            <h5 class="modal-title">
               <i class="<?php echo e(config('icons.')); ?>"></i>
               Trash Multiple <?php echo e($fullName); ?>

            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>

         <form action="<?php echo e(route('admin.'. $action .'.mass_destroy')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>

            <div class="modal-body text-dark">
               <p>Are you sure you want to trash the selected <?php echo e($modelNamePlural); ?>?</p>
               <p class="small font-weight-bold text-danger">Only an Administrator will be able to undo this action.</small>
            </div>

            <div class="modal-footer align-items-start">
               <input name="mass_destroy_pass_checkedvalue" type="hidden" value="mass_destroy_pass_checkedvalue" id="mass_destroy_hidden_checkedinput">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
               <button type="submit" class="btn bg-pink">Trash <?php echo e($fullName); ?></button>
            </form>

         </div><!-- Modal Footer -->

      </div><!-- Modal Content-->

   </div><!-- Modal Dialog-->

</div><!-- Modal -->
<?php /**PATH C:\sites\l7\resources\views/modals/massDestroy.blade.php ENDPATH**/ ?>