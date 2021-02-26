<!-- LOGIN COUNT WARNING -->



<tr class="row">
   
   <td class="col-5 col-sm-3">
      Login Count Warning
   </td>

   <td class="col-7 col-sm-3">
      <input
         type="text"
         name="login_count_warning"
         id="login_count_warning"
         class="form-control form-control-sm <?php $__errorArgs = ['login_count_warning'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
         value="<?php echo e(old('loginCountWarning') ?? Config::get('settings.loginCountWarning')); ?>"
         placeholder="login_count_warning"
         data-inputmask=""
      />
   </td>

   <td class="col-sm-6 d-none d-md-table-cell">
      How many times a user has to login to the site before the New User Panel is no longer shown.
   </td>

</tr>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/settings/fields/settings/loginCountWarning.blade.php ENDPATH**/ ?>