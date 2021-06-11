<!-- STATUS -->



<div class="form-group">
   
   <label for="status" class="<?php echo e($required ?? ''); ?>">
      Status
   </label>
   
   <?php if(Route::currentRouteName('') == 'features.create'): ?>
      <input type="text" name="status" value="New" class="form-control form-control-sm" readonly disabled />
   <?php elseif(Route::currentRouteName('') == 'features.edit'): ?>
      <input type="text" name="status" value="<?php echo e($feature->status); ?>" class="form-control form-control-sm" readonly disabled />
   <?php endif; ?>
   
   

</div>

<!-- TITLE -->
<?php /**PATH C:\sites\l7\resources\views/UI/features/forms/fields/status.blade.php ENDPATH**/ ?>