<!-- CATEGORY -->

<div class="col-xs-12 col-sm-4 col-md-2">
   
   <div class="form-group">
      
      <label for="category" class="required">
         Category
      </label>

      <?php if(Route::currentRouteName('') == 'admin.faqs.show'): ?>

         <div class="p-1 m-0 bg-gray-light">
            <?php echo $faq->category; ?>

         </div>

      <?php else: ?>
      
         <select
            name="category"
            value="<?php echo e(old('category') ?? $faq->category); ?>"
            id="category"
            class="form-control form-control-sm <?php $__errorArgs = ['category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
            <?php $__currentLoopData = $faq->categoriesOptions(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoryOptionKey => $categoryOptionValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <option value="<?php echo e($categoryOptionKey); ?>" <?php echo e($faq->category == $categoryOptionValue ? 'selected' : ''); ?>><?php echo e($categoryOptionValue); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </select>

      <?php endif; ?>
      
      <?php $__errorArgs = ['category'];
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

   </div>
   
</div>
<?php /**PATH C:\sites\l7\resources\views/admin/faqs/forms/fields/general/category.blade.php ENDPATH**/ ?>