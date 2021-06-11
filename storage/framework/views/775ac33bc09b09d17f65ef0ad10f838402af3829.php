<div class="col-xs-12 col-sm-6 col-md-3">
   
   <label for="width">Width <small>(Inches)</small> (X)</label>
   
   <span class="float-right">
      <i class="fa fa-question-circle" title="Dimensions from left to right when facing the item"></i>
   </span>
   
   <div class="input-group input-group-sm">
   
      <div class="input-group-prepend">
         <span class="input-group-text" id="basic-addon2">
            <i class="fas fa-ruler-horizontal"></i>
         </span>
      </div>

      <?php if(Route::currentRouteName('') == 'admin.carvings.show'): ?>

         <div class="col p-1 m-0 bg-gray-light border">
            <?php echo $carving->width ?? 'N/A'; ?>

         </div>

      <?php else: ?>
   
         <input type="text" name="width" value="<?php echo e(old('width') ?? $carving->width); ?>" class="form-control form-control-sm">

      <?php endif; ?>
   
   </div>
   
</div>
<?php /**PATH C:\sites\l7\resources\views/admin/carvings/forms/fields/others/width.blade.php ENDPATH**/ ?>