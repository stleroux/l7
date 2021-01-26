<!-- NO RECORDS FOUND -->

<div class="col-12 col-sm-6">

   <div class="card">
      <div class="card-body p-2">

         <div class="form-group">

            <label for="noRecordsFound" class="<?php echo e($required ?? ''); ?>">
               <?php echo e($label ?? 'No Records Found Message'); ?>

            </label>
            
            <input
               type="text"
               name="noRecordsFound"
               id="noRecordsFound"
               class="form-control <?php $__errorArgs = ['noRecordsFound'];
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
            <small>Message to display when no records are found in the database</small>
            
            <?php $__errorArgs = ['noRecordsFound'];
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
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/settings/fields/settings/noRecordsFound.blade.php ENDPATH**/ ?>