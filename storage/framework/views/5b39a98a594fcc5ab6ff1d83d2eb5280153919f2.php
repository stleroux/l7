

<div class="form-group">

   <label for="source" class="col-form-label <?php echo e($required ?? ''); ?>">Source</label>

   <?php if(Route::currentRouteName('') == 'admin.posts.show'): ?>

      <div class="p-1 m-0 bg-gray-light">
         <?php echo $post->source ?? 'N/A'; ?>

      </div>

   <?php else: ?>

      <input
      	type="text"
      	name="source"
      	id="source"
      	value="<?php echo e(old('source') ?? $post->source); ?>"
      	class="form-control form-control-sm <?php $__errorArgs = ['source'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
      />
      
      <?php $__errorArgs = ['source'];
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
<?php /**PATH C:\sites\l7\resources\views/admin/posts/forms/fields/source.blade.php ENDPATH**/ ?>