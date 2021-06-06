<!-- RELEASED -->
<div class="form-group <?php echo e($errors->has('released') ? 'has-error' : ''); ?>">
   <label for="released">Released</label>
   <input type="text" name="released" value="<?php echo e(old('released') ?? $movie->released); ?>" class="form-control form-control-sm">
   <div class="pl-1 bg-danger"><?php echo e($errors->first('released')); ?></div>
</div>
<?php /**PATH C:\sites\l7\resources\views/admin/movies/fields/released.blade.php ENDPATH**/ ?>