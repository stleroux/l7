<!-- PAGE -->

<div class="form-group">

   <label for="page" class="<?php echo e($required ?? ''); ?>">
      <?php echo e($label ?? 'Page'); ?>

   </label>
   
   <?php if(Route::currentRouteName('') == 'admin.blocks.show'): ?>

      <div class="p-1 m-0 bg-gray-light">
         <?php echo e($block->page ?? 'N/A'); ?>

      </div>

   <?php else: ?>

      

      <select name="page" id="page" class="form-control form-control-sm <?php $__errorArgs = ['page'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
         <?php $__currentLoopData = $block->pageOptions(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pageOptionKey => $pageOptionValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($pageOptionKey); ?>" <?php echo e($block->page == $pageOptionValue ? 'selected' : ''); ?>><?php echo e($pageOptionValue); ?></option>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>

   <?php endif; ?>
   
   <?php $__errorArgs = ['page'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
      <span class="invalid-feedback" role="alert">
         <strong><?php echo e($message); ?></strong>
      </span>
   <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

</div><?php /**PATH C:\sites\l7\resources\views/admin/blocks/forms/fields/page.blade.php ENDPATH**/ ?>