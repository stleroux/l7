<!-- DATE FORMAT -->



<tr class="row">
   
   <td class="col-5 col-sm-3">
      Date Format
   </td>

   <td class="col-7 col-sm-3">
      <input
         type="text"
         name="dateFormat"
         id="dateFormat"
         class="form-control form-control-sm <?php $__errorArgs = ['dateFormat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
         value="<?php echo e(old('dateFormat') ?? Config::get('settings.dateFormat')); ?>"
         placeholder="dateFormat"
         data-inputmask=""
      />
   </td>

   <td class="col-sm-6 d-none d-md-table-cell">
      Use any PHP compatible date format.
   </td>

</tr><?php /**PATH C:\sites\l7\resources\views/admin/settings/fields/settings/dateFormat.blade.php ENDPATH**/ ?>