<div class="col-xs-12 col-sm-6 col-md-3">

   <label for="time_invested">Design Time <small>(Hrs)</small></label>

   <div class="input-group input-group-sm">

      <div class="input-group-prepend">
         <span class="input-group-text" id="basic-addon2">
            <i class="far fa-clock"></i>
         </span>
      </div>

      <?php if(Route::currentRouteName('') == 'admin.carvings.show'): ?>

         <div class="col p-1 m-0 bg-gray-light border">
            <?php echo $carving->design_time_hrs ?? 'N/A'; ?>

         </div>

      <?php else: ?>

         <input type="number" name="design_time_hrs" value="<?php echo e(old('design_time_hrs') ?? $carving->design_time_hrs); ?>" class="form-control form-control-sm">

      <?php endif; ?>

   </div>

</div>
<?php /**PATH C:\sites\l7\resources\views/admin/carvings/forms/fields/others/designTimeHrs.blade.php ENDPATH**/ ?>