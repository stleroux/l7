<!-- INVOICER VERSION NO -->




   
<tr class="row">
   
   <th class="col-5 col-sm-3">
      Users To Notify
   </td>

   <td class="col-7 col-sm-3">
      <input
         type="text"
         name="usersToNotify"
         id="usersToNotify"
         class="form-control form-control-sm <?php $__errorArgs = ['usersToNotify'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
         value="<?php echo e(old('usersToNotify') ?? Config::get('invoicer.usersToNotify')); ?>"
         placeholder="Users To Notify"
         data-inputmask=""
      />
   </td>

   <td class="col-sm-6 d-none d-md-table-cell">
      Comma seperated list of user ids (i.e.: 1,2,3)
      
      <span class="float-right">
         <select name="users" class="form-control form-control-sm">
            <option value="">Possible Values</option>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <option value=""><?php echo e($key); ?> => <?php echo e($value); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </select>
      </span>

   </td>

</tr>
<?php /**PATH C:\sites\l7\resources\views/admin/settings/fields/invoicer/usersToNotify.blade.php ENDPATH**/ ?>