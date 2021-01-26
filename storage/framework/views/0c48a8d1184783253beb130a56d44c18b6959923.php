

<?php if(Route::currentRouteName() == 'admin.recipes.edit'): ?>
   <div class="col-xs-6 col-sm-2">

      <table width="100%">
         <tr>
            <th>Current Image</th>
         </tr>
         <tr>
            <td>
               <?php if($recipe->image): ?>
                  <img src="/_recipes/<?php echo e($recipe->image); ?>" height="125" width="125" alt="">
               <?php else: ?>
                  <i class="fa fa-5x fa-ban" aria-hidden="true"></i>
               <?php endif; ?>
            </td>
         </tr>
      </table>

   </div>

<?php endif; ?>

<div class="form-group">

   <label for="image" class="col-form-label <?php echo e($required ?? ''); ?>">Image</label>

   <input
   	type="file"
   	name="image"
   	id="image"
   	value="<?php echo e(old('image') ?? $recipe->image); ?>"
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

</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/recipes/forms/fields/image.blade.php ENDPATH**/ ?>