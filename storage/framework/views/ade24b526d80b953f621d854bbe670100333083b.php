<!-- INCOME TAX RATE -->




<tr class="row">
   
   <th class="col-5 col-sm-3">
      Income Tax Rate
   </td>

   <td class="col-7 col-sm-3">
      <input
         type="text"
         name="incomeTaxRate"
         id="incomeTaxRate"
         class="form-control form-control-sm <?php $__errorArgs = ['incomeTaxRate'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
         value="<?php echo e(old('incomeTaxRate') ?? Config::get('invoicer.incomeTaxRate')); ?>"
         placeholder="incomeTaxRate"
         data-inputmask=""
      />
   </td>

   <td class="col-sm-6 d-none d-md-table-cell">

   </td>

</tr>
<?php /**PATH C:\sites\l7\resources\views/admin/settings/fields/invoicer/incomeTaxRate.blade.php ENDPATH**/ ?>