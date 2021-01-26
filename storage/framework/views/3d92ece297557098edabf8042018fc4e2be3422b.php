<!-- HST RATE -->

<div class="col-12 col-sm-6">

   <div class="card">
      <div class="card-body p-2">

         <div class="form-group">

            <label for="hstRate" class="<?php echo e($required ?? ''); ?>">
               <?php echo e($label ?? 'HST Rate'); ?>

            </label>
            
            <input
               type="text"
               name="hstRate"
               id="hstRate"
               class="form-control <?php $__errorArgs = ['hstRate'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
               value="<?php echo e(old('hstRate') ?? Config::get('invoicer.hstRate')); ?>"
               placeholder="HST Rate"
               data-inputmask=""
            />
            <small>HST Rate</small>
            
            <?php $__errorArgs = ['hstRate'];
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
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/settings/fields/invoicer/hstRate.blade.php ENDPATH**/ ?>