<!-- RUNNING TIME -->
<div class="form-group <?php echo e($errors->has('running_time') ? 'has-error' : ''); ?>">
   <label for="running_time">Running Time</label>
   <input type="number" name="running_time" value="<?php echo e(old('running_time') ?? $movie->running_time); ?>" class="form-control form-control-sm">
   <div class="pl-1 bg-danger"><?php echo e($errors->first('running_time')); ?></div>
</div>
<?php /**PATH C:\sites\l7\resources\views/admin/movies/fields/running_time.blade.php ENDPATH**/ ?>