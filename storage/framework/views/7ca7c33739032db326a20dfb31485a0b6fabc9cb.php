<!-- IMDB No -->
<div class="form-group <?php echo e($errors->has('original_title') ? 'has-error' : ''); ?>">
   <label for="imdb_no">IMDB N<supp>o</supp></label>
   <input type="text" name="imdb_no" value="<?php echo e(old('imdb_no') ?? $movie->imdb_no); ?>" class="form-control form-control-sm">
   <div class="pl-1 bg-danger"><?php echo e($errors->first('original_title')); ?></div>
</div>
<?php /**PATH C:\sites\l7\resources\views/admin/movies/fields/imdb_no.blade.php ENDPATH**/ ?>