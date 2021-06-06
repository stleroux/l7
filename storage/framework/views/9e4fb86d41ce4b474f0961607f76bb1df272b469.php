<!-- DESCRIPTION -->


<div class="form-group">

   <label for="description" class="<?php echo e($required ?? ''); ?>">
      <?php echo e($label ?? 'Description'); ?>

   </label>
   
   <textarea
   	name="description"
   	id="description"
   	class="form-control"
   	rows="2"
   	data-autosize
   	placeholder="description"
      data-inputmask=""
      <?php echo e($disabled ?? ''); ?>><?php echo e(old('description') ?? $category->description); ?></textarea>

   <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
      <div class="text-danger" role="alert">
         <small><?php echo e($message); ?></small>
      </div>
   <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

</div><?php /**PATH C:\sites\l7\resources\views/admin/categories/edit/fields/description.blade.php ENDPATH**/ ?>