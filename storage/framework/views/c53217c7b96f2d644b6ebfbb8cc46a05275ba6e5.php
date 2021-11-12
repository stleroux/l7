<!-- POPULAR COUNT -->




<tr class="row">
   
   <td class="col-5 col-sm-3">
      Popular Count
   </td>

   <td class="col-7 col-sm-3">
      <input
         type="number"
         name="popularCount"
         id="popularCount"
         class="form-control form-control-sm <?php $__errorArgs = ['popularCount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
         value="<?php echo e(old('popularCount') ?? Config::get('settings.popularCount')); ?>"
         placeholder="popularCount"
         data-inputmask=""
      />
   </td>

   <td class="col-sm-6 d-none d-md-table-cell">
      The number of popular items to display in each block.
   </td>

</tr>
<?php /**PATH C:\sites\l7\resources\views/admin/settings/fields/settings/popularCount.blade.php ENDPATH**/ ?>