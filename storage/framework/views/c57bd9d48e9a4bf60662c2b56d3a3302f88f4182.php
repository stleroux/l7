<!-- STUDIO -->
<div class="form-group <?php echo e($errors->has('studio') ? 'has-error' : ''); ?>">
   <label for="studio">Studio</label>
   <input type="text" name="studio" value="<?php echo e(old('studio') ?? $movie->studio); ?>" class="form-control form-control-sm">
   <div class="pl-1 bg-danger"><?php echo e($errors->first('studio')); ?></div>
</div>
<?php /**PATH C:\sites\l7\resources\views/admin/movies/fields/studio.blade.php ENDPATH**/ ?>