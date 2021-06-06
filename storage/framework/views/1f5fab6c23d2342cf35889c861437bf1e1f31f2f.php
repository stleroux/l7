<!-- CATEGORY -->




   
      <div class="form-group">
         
         <label for="category_id" class="required">Category</label>
         <select name="category_id" id="category_id" class="form-control form-control-sm <?php $__errorArgs = ['category_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
            <?php if(last(request()->segments()) === 'create'): ?>
               <option value="" selected>Select One</option>
            <?php endif; ?>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <?php if(last(request()->segments()) === 'create'): ?>
                  <option disabled><?php echo e(ucfirst($category->name)); ?></option>
               <?php endif; ?>
               <?php $__currentLoopData = $category->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $children): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php if(last(request()->segments()) === 'create'): ?>
                     <option value="<?php echo e($children->id); ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- <?php echo e(ucfirst($children->name)); ?></option>
                  <?php endif; ?>
                  <?php if(last(request()->segments()) === 'edit'): ?>
                     <option value="<?php echo e($children->id); ?>" <?php echo e(($post->category_id == $children->id ) ? 'selected' : ''); ?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- <?php echo e(ucfirst($children->name)); ?></option>
                  <?php endif; ?>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </select>
         

   <?php $__errorArgs = ['category_id'];
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
   <?php /**PATH C:\sites\l7\resources\views/admin/posts/forms/fields/category.blade.php ENDPATH**/ ?>