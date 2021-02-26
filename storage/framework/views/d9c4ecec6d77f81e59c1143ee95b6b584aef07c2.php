<!-- NO RECORDS FOUND -->




<tr class="row">
   
   <td class="col-5 col-sm-3">
      No Records Found Message
   </td>

   <td class="col-7 col-sm-3">
      <input
         type="text"
         name="noRecordsFound"
         id="noRecordsFound"
         class="form-control form-control-sm <?php $__errorArgs = ['noRecordsFound'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
         value="<?php echo e(old('noRecordsFound') ?? Config::get('settings.noRecordsFound')); ?>"
         placeholder="noRecordsFound"
         data-inputmask=""
      />
   </td>

   <td class="col-sm-6 d-none d-md-table-cell">
      Message to display when no records are found in the database.
   </td>

</tr>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/settings/fields/settings/noRecordsFound.blade.php ENDPATH**/ ?>