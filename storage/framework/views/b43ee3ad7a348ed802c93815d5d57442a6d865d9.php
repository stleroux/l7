<!-- PRODUCTION YEAR -->
<div class="form-group <?php echo e($errors->has('production_year') ? 'has-error' : ''); ?>">
   <label for="production_year">Production Year</label>
   <input type="text" name="production_year" value="<?php echo e(old('production_year') ?? $movie->production_year); ?>" class="form-control form-control-sm">
   <div class="pl-1 bg-danger"><?php echo e($errors->first('production_year')); ?></div>
</div>
<?php /**PATH C:\sites\l7\resources\views/admin/movies/fields/production_year.blade.php ENDPATH**/ ?>