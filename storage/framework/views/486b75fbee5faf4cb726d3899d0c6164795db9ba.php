<!-- UPC -->
<div class="form-group <?php echo e($errors->has('upc') ? 'has-error' : ''); ?>">
   <label for="upc">UPC</label>
   <input type="text" name="upc" value="<?php echo e(old('upc') ?? $movie->upc); ?>" class="form-control form-control-sm">
   <div class="pl-1 bg-danger"><?php echo e($errors->first('upc')); ?></div>
</div><?php /**PATH C:\sites\l7\resources\views/admin/movies/fields/upc.blade.php ENDPATH**/ ?>