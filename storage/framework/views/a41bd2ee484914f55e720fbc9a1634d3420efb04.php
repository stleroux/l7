<!-- OTHER INFO -->
<div class="card card-trans-2 mb-2 collapsed-card">
   
   <div class="card-header bg-primary p-2">
      <div class="card-title">Other Info</div>
      <div class="card-tools">
         <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-plus"></i>
         </button>
      </div>
   </div>

   <div class="card-body section_body p-2">
      <div class="form-row">
         <div class="col-sm-12">
            <div class="form-group">
               <div class="form-group">
                  <?php echo $__env->make('admin.users.forms.fields.notes', ['disabled'=>'disabled'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               </div>
            </div>
         </div>
      </div>
   </div>

</div>
<?php /**PATH C:\sites\l7\resources\views/UI/profile/show/other.blade.php ENDPATH**/ ?>