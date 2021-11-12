<!-- CATEGORY -->

<div class="col-xs-12 col-sm-4 col-md-2">
   
   <div class="form-group">
      
      <label for="category" class="required">
         Category
      </label>

      <?php if(Route::currentRouteName('') == 'admin.offerings.show'): ?>

         <div class="p-1 m-0 bg-gray-light">
            <?php echo $offering->category > 0 ? $offering->category : 'Parent'; ?>

         </div>

      <?php else: ?>
      
         <select
            name="category"
            value="<?php echo e(old('category') ?? $offering->category); ?>"
            id="category"
            class="form-control form-control-sm <?php $__errorArgs = ['category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">

            <option value="">Select One</option>
            
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <option value="<?php echo e($category->id); ?>" <?php echo e($offering->category === $category->id ? 'selected' : ''); ?> ><?php echo e(ucwords($category->name)); ?></option>
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
<?php /**PATH C:\sites\l7\resources\views/admin/offerings/forms/fields/general/category.blade.php ENDPATH**/ ?>