<!-- PER PAGE COUNT -->


            
         




<tr class="row">
   
   <td class="col-5 col-sm-3">
      Rows per page
   </td>

   <td class="col-7 col-sm-3">
      <select name="perPage" class="form-control form-control-sm <?php $__errorArgs = ['perPage'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
         <option value="10" <?php echo e(config('settings.perPage') == '10' ? 'selected' : ''); ?>>10</option>
         <option value="15" <?php echo e(config('settings.perPage') == '15' ? 'selected' : ''); ?>>15</option>
         <option value="20" <?php echo e(config('settings.perPage') == '20' ? 'selected' : ''); ?>>20</option>
         <option value="25" <?php echo e(config('settings.perPage') == '25' ? 'selected' : ''); ?>>25</option>
         <option value="50" <?php echo e(config('settings.perPage') == '50' ? 'selected' : ''); ?>>50</option>
         <option value="100" <?php echo e(config('settings.perPage') == '100' ? 'selected' : ''); ?>>100</option>
      </select>
   </td>

   <td class="col-sm-6 d-none d-md-table-cell">
      The number of rows to display in the table pagination.
   </td>

</tr>
<?php /**PATH C:\sites\l7\resources\views/admin/settings/fields/settings/perPage.blade.php ENDPATH**/ ?>