<div class="col-xs-12 col-sm-6 col-md-3">

   <label for="depth">Depth <small>(Inches)</small></label>
   
   <span class="float-right">
      <i class="fa fa-question-circle" title="Dimensions from front to back when facing the item"></i>
   </span>
   
   <div class="input-group input-group-sm">
      
      <div class="input-group-prepend">
         <span class="input-group-text" id="basic-addon2">
            <i class="fas fa-ruler"></i>
         </span>
      </div>
      
      <input type="text" name="depth" value="<?php echo e(old('depth') ?? $project->depth); ?>" class="form-control form-control-sm">
   
   </div>
   
</div>
<?php /**PATH C:\sites\l7\resources\views/admin/projects/forms/fields/others/depth.blade.php ENDPATH**/ ?>