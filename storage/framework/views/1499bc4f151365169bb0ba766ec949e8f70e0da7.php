

<div class="form-group">

   <label for="image" class="col-form-label <?php echo e($required ?? ''); ?>">Image</label>

   <?php if(Route::currentRouteName('') == 'admin.posts.show'): ?>

      <?php if($post->image): ?>
         <div class="p-1 m-0 bg-gray-light">
            <?php echo $post->image ?? 'N/A'; ?>

            
         </div>
         <img src="<?php echo e(url('/_posts/'.$post->image)); ?>" alt="Image" />
      <?php else: ?>
         No Image Selected
      <?php endif; ?>

      <?php else: ?>

         <?php if($post->image): ?>
            <img src="<?php echo e(url('/_posts/'.$post->image)); ?>" alt="Image" width="250px" />
         <?php else: ?>
            No Image Selected
         <?php endif; ?>

         <input
         	type="file"
         	name="image"
         	id="image"
         	value="<?php echo e(old('image') ?? $post->image); ?>"
         	class="form-control <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> p-1"
         />

         <span class="help-block"><small>Only choose new image to replace the existing one.</small></span>
         
         <?php $__errorArgs = ['image'];
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
<?php /**PATH C:\sites\l7\resources\views/admin/posts/forms/fields/image.blade.php ENDPATH**/ ?>