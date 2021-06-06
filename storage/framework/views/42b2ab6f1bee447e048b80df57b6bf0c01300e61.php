<!-- RATING -->
<div class="form-group <?php echo e($errors->has('rating') ? 'has-error' : ''); ?>">
   <label for="rating">Rating</label>
   <input type="text" name="rating" value="<?php echo e(old('rating') ?? $movie->rating); ?>" class="form-control form-control-sm">
   <div class="pl-1 bg-danger"><?php echo e($errors->first('rating')); ?></div>
</div>
<?php /**PATH C:\sites\l7\resources\views/admin/movies/fields/rating.blade.php ENDPATH**/ ?>