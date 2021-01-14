<!-- AUTHOR FORMAT -->

<div class="form-group">

   <label for="authorFormat" class="<?php echo e($required ?? ''); ?>">
      <?php echo e($label ?? 'Author Format'); ?>

   </label>

   <select name="authorFormat" class="form-control <?php $__errorArgs = ['authorFormat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
      <option value="username" <?php echo e(config('settings.authorFormat') == 'username' ? 'selected' : ''); ?>>Username</option>
      <option value="last_name, first_name" <?php echo e(config('settings.authorFormat') == 'last_name, first_name' ? 'selected' : ''); ?>>Last Name, First Name</option>
      <option value="first_name last_name" <?php echo e(config('settings.authorFormat') == 'first_name last_name' ? 'selected' : ''); ?>>First Name Last Name</option>
   </select>
   <small>The information to display in Author modal or in tables and grids</small>

   <?php $__errorArgs = ['authorFormat'];
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

</div><?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/settings/fields/authorFormat.blade.php ENDPATH**/ ?>