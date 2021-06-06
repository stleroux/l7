<!-- APPNAME -->





<tr class="row">

   <th class="col-5 col-sm-3">
      App Name
   </th>
   
   <td class="col-7 col-sm-3">
      <input
         type="text"
         name="appName"
         id="appName"
         class="form-control form-control-sm <?php $__errorArgs = ['appName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
         value="<?php echo e(old('appName') ?? Config::get('settings.appName')); ?>"
         placeholder="appName"
         data-inputmask=""
         title="The name of the application as it will apppear throughout the site."
      />
   </td>
   
   <td class="col-sm-6 d-none d-md-table-cell">
      The name of the application as it will apppear throughout the site.
   </td>
   
</tr>
<?php /**PATH C:\sites\l7\resources\views/admin/settings/fields/home/appName.blade.php ENDPATH**/ ?>