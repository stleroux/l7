<!-- AUTHOR FORMAT -->




<tr class="row">
   
   <td class="col-5 col-sm-3">
      Author Format
   </td>

   <td class="col-7 col-sm-3">
      <select name="authorFormat" class="form-control form-control-sm <?php $__errorArgs = ['authorFormat'];
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
   </td>

   <td class="col-sm-6 d-none d-md-table-cell">
      The information to display in Author modal or in tables and grids.
   </td>

</tr>
<?php /**PATH C:\sites\l7\resources\views/admin/settings/fields/settings/authorFormat.blade.php ENDPATH**/ ?>