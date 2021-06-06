<!-- MASS RESTORE MODAL -->
<?php
   $modelNamePlural = Illuminate\Support\Str::plural($modelName);
   $action = $modelNamePlural;
   $fullName = ucfirst($modelNamePlural);
?>

<div class="modal bg-secondary" tabindex="-1" role="dialog" id="massResetViews-modal">
   
   <div class="modal-dialog modal-dialog-centered" role="document">
      
      <div class="modal-content">
         
         <div class="modal-header bg-primary">
            <h5 class="modal-title">
               
               Reset View Counts for Multiple <?php echo e($fullName); ?>

            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>

         <form action="<?php echo e(route('admin.'. $action .'.mass_resetViews')); ?>" method="POST">
            <?php echo csrf_field(); ?>

            <div class="modal-body text-dark">
               <p>Are you sure you want to reset the view counts for the selected <?php echo e($modelNamePlural); ?>?</p>
            </div>

            <div class="modal-footer align-items-start">
               <input name="mass_resetViews_pass_checkedvalue" type="hidden" value="mass_resetViews_pass_checkedvalue" id="mass_resetViews_hidden_checkedinput">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
               <button type="submit" class="btn btn-primary">Reset View Counts</button>
            </div><!-- Modal Footer -->
         </form>

      </div><!-- Modal Content-->

   </div><!-- Modal Dialog-->

</div><!-- Modal -->
<?php /**PATH C:\sites\l7\resources\views/modals/massResetViews.blade.php ENDPATH**/ ?>