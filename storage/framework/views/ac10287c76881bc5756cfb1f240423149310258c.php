<!-- COLLECTION No -->
<div class="form-group <?php echo e($errors->has('col_no') ? 'has-error' : ''); ?>">
   <label for="col_no">Collection N<supp>o</supp></label>
   
   <?php if(Route::currentRouteName() == 'admin.movies.edit'): ?>
   	<input type="text" name="col_no" value="<?php echo e(old('col_no') ?? $movie->col_no); ?>" class="form-control form-control-sm" readonly>
   <?php else: ?>
   	<input type="text" name="col_no" value="<?php echo e(old('col_no') ?? $next_col_no); ?>" class="form-control form-control-sm" readonly>
   <?php endif; ?>
   
   <div class="pl-1 bg-danger"><?php echo e($errors->first('col_no')); ?></div>
</div>
<?php /**PATH C:\sites\l7\resources\views/admin/movies/fields/col_no.blade.php ENDPATH**/ ?>