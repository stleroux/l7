<div class="col-xs-12 col-sm-6 col-md-3">
   
   <label for="height">Height <small>(Inches)</small> (Y)</label>
   
   <span class="float-right">
      <i class="fa fa-question-circle" title="Dimensions from the floor up when facing the item"></i>
   </span>
   
   <div class="input-group input-group-sm">
      
      <div class="input-group-prepend">
         <span class="input-group-text" id="basic-addon2">
            <i class="fas fa-ruler-vertical"></i>
         </span>
      </div>

      <?php if(Route::currentRouteName('') == 'admin.carvings.show'): ?>

         <div class="col p-1 m-0 bg-gray-light border">
            <?php echo $carving->height ?? 'N/A'; ?>

         </div>

      <?php else: ?>
      
         <input type="text" name="height" value="<?php echo e(old('height') ?? $carving->height); ?>" class="form-control form-control-sm">

      <?php endif; ?>
   
   </div>
   
</div>
<?php /**PATH C:\sites\l7\resources\views/admin/carvings/forms/fields/others/height.blade.php ENDPATH**/ ?>