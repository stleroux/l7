<div class="col-xs-12 col-sm-6 col-md-3">

   <label for="time_invested">Design Time <small>(Hrs)</small></label>

   <div class="input-group input-group-sm">

      <div class="input-group-prepend">
         <span class="input-group-text" id="basic-addon2">
            <i class="far fa-clock"></i>
         </span>
      </div>

      <input type="number" name="design_time_hrs" value="<?php echo e(old('design_time_hrs') ?? $carving->design_time_hrs); ?>" class="form-control form-control-sm">

   </div>

</div>
<?php /**PATH C:\sites\l7\resources\views/admin/carvings/forms/fields/others/designTimeHrs.blade.php ENDPATH**/ ?>