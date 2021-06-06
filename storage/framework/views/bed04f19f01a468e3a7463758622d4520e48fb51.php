<!-- GENERIC FORM SUMISSION ERROR -->

<tr class="row">
   
   <td class="col-5 col-sm-3">
      Generic Form Submission Error
   </td>

   <td class="col-7 col-sm-3">
      <input
         type="text"
         name="formSubmissionError"
         id="formSubmissionError"
         class="form-control form-control-sm <?php $__errorArgs = ['formSubmissionError'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
         value="<?php echo e(old('formSubmissionError') ?? Config::get('settings.formSubmissionError')); ?>"
         placeholder="formSubmissionError"
         data-inputmask=""
      />
   </td>

   <td class="col-sm-6 d-none d-md-table-cell">
      Generic message to display at top of form when validation error(s) occur.
   </td>

</tr><?php /**PATH C:\sites\l7\resources\views/admin/settings/fields/settings/formSubmissionError.blade.php ENDPATH**/ ?>