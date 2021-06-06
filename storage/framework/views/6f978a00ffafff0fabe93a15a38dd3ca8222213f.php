<!-- GENERIC FORM SUMISSION ERROR -->

<tr class="row">
   
   <td class="col-5 col-sm-3">
      View More
   </td>

   <td class="col-7 col-sm-3">
      <textarea name="viewMore" id="viewMore" cols="40" rows="3" class="form-control form-control-sm <?php $__errorArgs = ['viewMore'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="viewMore" data-inputmask=""><?php echo e(old('viewMore') ?? Config::get('settings.viewMore')); ?></textarea>
   </td>

   <td class="col-sm-6 d-none d-md-table-cell">
      Message to display when user is not logged in and they view a details page.
   </td>

</tr><?php /**PATH C:\sites\l7\resources\views/admin/settings/fields/settings/viewMore.blade.php ENDPATH**/ ?>