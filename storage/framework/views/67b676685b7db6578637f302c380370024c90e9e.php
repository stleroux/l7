<!-- ADDRESS 1 -->



<tr class="row">
   
   <th class="col-5 col-sm-3">
      Address 1
   </td>

   <td class="col-7 col-sm-3">
      <input
         type="text"
         name="address_1"
         id="address_1"
         class="form-control form-control-sm <?php $__errorArgs = ['address_1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
         value="<?php echo e(old('address_1') ?? Config::get('invoicer.address_1')); ?>"
         placeholder="address_1"
         data-inputmask=""
      />
   </td>

   <td class="col-sm-6 d-none d-md-table-cell">
      
   </td>

</tr>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/settings/fields/invoicer/address_1.blade.php ENDPATH**/ ?>