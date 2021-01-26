<!-- PER PAGE COUNT -->

<div class="col-12 col-sm-6">

   <div class="card">
      <div class="card-body p-2">

         <div class="form-group">

            <label for="perPage" class="<?php echo e($required ?? ''); ?>">
               <?php echo e($label ?? 'Rows per page'); ?>

            </label>
            
         

            <select name="perPage" class="form-control <?php $__errorArgs = ['perPage'];
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



            <small>The number of rows to display in the table pagination</small>
            
            <?php $__errorArgs = ['perPage'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
               <span class="invalid-feedback" role="alert">
                  <strong><?php echo e($message); ?></strong>
               </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

         </div>

      </div>
   </div>

</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/settings/fields/settings/perPage.blade.php ENDPATH**/ ?>