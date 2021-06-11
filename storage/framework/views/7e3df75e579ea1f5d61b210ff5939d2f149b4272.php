<div class="form-group">
   
   <label for="body" class="required">Body</label>
   
   <?php if(Route::currentRouteName('') == 'admin.posts.show'): ?>

         <div class="p-1 m-0 bg-gray-light">
            <?php echo $post->body ?? 'N/A'; ?>

         </div>

      <?php else: ?>

         <textarea name="body" id="wysiwyg" rows="5" class="form-control form-control-sm wysiwyg <?php $__errorArgs = ['body'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"><?php echo e(old('body') ?? $post->body); ?></textarea>
         
         <?php $__errorArgs = ['body'];
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

      <?php endif; ?>
</div>
<?php /**PATH C:\sites\l7\resources\views/admin/posts/forms/fields/body.blade.php ENDPATH**/ ?>