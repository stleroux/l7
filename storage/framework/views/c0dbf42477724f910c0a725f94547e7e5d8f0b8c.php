<!-- STATUS -->

<div class="form-group">
   
   <label for="status" class="<?php echo e($required ?? ''); ?>">
   	Status
   </label>
   
   <?php if(Route::currentRouteName('') == 'bugs.create'): ?>
      <input type="text" name="status" value="New" class="form-control form-control-sm" readonly disabled />
   <?php elseif(Route::currentRouteName('') == 'bugs.edit'): ?>
      <input type="text" name="status" value="<?php echo e($bug->status); ?>" class="form-control form-control-sm" readonly disabled />
   <?php endif; ?>
   
   

</div>


<?php /**PATH C:\sites\l7\resources\views/UI/bugs/forms/fields/status.blade.php ENDPATH**/ ?>