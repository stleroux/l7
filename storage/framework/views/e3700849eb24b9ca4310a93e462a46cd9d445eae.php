<div class="col-xs-12 col-sm-6 col-md-3">

   <label for="price">Price</label>

   <div class="input-group input-group-sm">

      <div class="input-group-prepend">
         <span class="input-group-text" id="basic-addon2">
            <i class="fas fa-dollar-sign"></i>
         </span>
      </div>

      <input type="text" name="price" value="<?php echo e(old('price') ?? $carving->price); ?>" class="form-control form-control-sm">

   </div>

</div>
<?php /**PATH C:\sites\l7\resources\views/admin/carvings/forms/fields/others/price.blade.php ENDPATH**/ ?>